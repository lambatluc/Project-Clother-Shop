<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
      
    }
    
    public function index(){
        return view('admin.loadView.categories.index');
    }
    
}
