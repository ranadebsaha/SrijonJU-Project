<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MainController extends Controller
{
    public function index(){
        return view("index");
    }

    public function register(){
        return view("frontend/register");
    }

    public function insert(Request $request){
        $customer=new Customer;
        $customer->name=$request['name'];
        $customer->gender=$request['gender'];
        $customer->dob=$request['dob'];
        $customer->email=$request['email'];
        $customer->contact_no=$request['contact_no'];
        $customer->address=$request['address'];
        $customer->password=$request['password'];
        $customer->country=$request['country'];
        $customer->city=$request['city'];
        $customer->state=$request['state'];
        $customer->save();
        return redirect('/');
    }
}
