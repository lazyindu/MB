<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("bettingdashboard.homepage");
    }
    public function userlogin(Request $req)
    {
        if ($req->method() == "POST") {
            $data = $req->only(["email", "password"]);

            if (Auth::guard("user")->attempt($data)) { 
                
                return redirect()->route("user.panel");
            } else {
                return redirect()->back()->with("alert","Please enter valid email or password");
            }
        }
        return view('bettingdashboard.userlogin');
    }

    public function userlogout(Request $req)
    {
        Auth::guard("presell")->logout();
        return redirect()->back();
    }
    public function userRegister(Request $req){
        if($req->method()=="POST"){
            dd("this is working");
        }
        return view("bettingdashboard.userRegistration");
    }
}
