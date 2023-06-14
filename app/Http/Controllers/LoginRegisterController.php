<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestcheckInputRegister;
use App\Http\Requests\RequestCheckInputLogin;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\View\Components;
class LoginRegisterController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    public function showLogin(){
        return view('admin.loadView.login_register.form_login');
    }
    public function showRegister(){
        return view('admin.loadView.login_register.form_register');
    }
    public function checkLogin(RequestCheckInputLogin $request){
        $remember = $request->has('remember_me') ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)){
             return redirect()->route('admin.category.show');
        }else{
            return redirect()->back()->with('error','Tài khoản hoặc Mật khẩu không chính xác');
        }
    }
    public function checkRegister(RequestcheckInputRegister $request){
       
        $use =  new User();
        $use->name = $request->name;
        $use->email = $request->email;
        $use->password = Hash::make($request->password);
        $use->save();
        
         return redirect()->back()->with('success','Đăng ký thành công');
    }
}
