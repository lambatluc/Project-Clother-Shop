<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Transaction;
use App\Models\Admin\NotificationFake;
use App\Models\Admin\Order;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;


class ManagerOrder extends Controller
{
    public function __construct()
    {
      
    }
    
    public function index(){
        $or = Transaction::latest()->get();
        return view('admin.loadView.order.index',compact('or'));
    }

    public function detail($idorder){
        $order = Order::find($idorder);
        $info_cus= $order->order_transaction;
        $wards = $order->ward;
        $distric =$wards->belongDistrict;
        $province = $distric->belongProvince;

        return view('admin.loadView.order.detail',compact('order','info_cus','wards','distric','province'));
    }

    public function pdf($id){
        $order = Order::find($id);
        $info_cus= $order->order_transaction;
        $wards = $order->ward;
        $distric =$wards->belongDistrict;
        $province = $distric->belongProvince;
        return view('admin.loadView.order.convespdf',compact('order','info_cus','wards','distric','province'));
    }
    
    public function confirmOrder($id){
        Transaction::find($id)->update([
            'status' => 1,
            'payment-success' =>1
        ]);
        return response()->json([
            'code' => 200,
            'mess' => 'success'
        ],200);
    }
    
    public function removeconfirmOrder($id){
       $remove = Transaction::find($id);
      $re =  Order::find($remove->orders_id)->delete();
       $or = Transaction::latest()->get();
       if($or){
        $cartComponent = view('admin.loadView.order.cursive_index',compact('or'))->render();
        return response()->json([
            'code' => 200,
            'main' => $cartComponent,
            'mess' => 'success'
        ],200);
       }
    }

    public function readNotification($id){
        $check = NotificationFake::where('norder_id',$id)->update(
           [ 'read_at' => Carbon::now('Asia/Ho_Chi_Minh')]
        );

        if($check) {
            return redirect()->route('admin.morder');
        }
    }
}
