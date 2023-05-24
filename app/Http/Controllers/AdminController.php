<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view("adminpanel.bettingPanel");
    }
    public function adminlogin(Request $req)
    {
        if ($req->method() == "POST") {
            $data = $req->only(["email", "password"]);

            if (Auth::guard("admin")->attempt($data)) { 
                
                return redirect()->route("admin.panel");
            } else {
                return redirect()->back()->with("alert","Please enter valid email or password");
            }
        }
        return view('adminpanel/adminlogin');
    }
    public function adminlogout(Request $req)
    {
        Auth::guard("admin")->logout();
        return redirect()->back();
    }
}
