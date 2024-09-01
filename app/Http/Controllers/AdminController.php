<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   
    
    public function  LoginPage () {
        return view("auth.AdminLogin") ;
    }

    public function  Login ( Request $req) {
         if (Auth::guard('admin')->attempt(["email" => $req->email , 'password' => $req->password]) ) {
                return redirect()->route('AdminDashboard') ;
         } else {
             return "error0 " ;
         }
            return $req->all() ;
    }
    public function  Logout ( Request $req) {
        Auth::guard('admin')->logout() ;

    }

}
