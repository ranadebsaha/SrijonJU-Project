<?php

namespace App\Http\Controllers;

use App\Models\Advocate;
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
    public function advocate_register_form(){
        return view("frontend/advocate_register");
    }
    public function advocate_login_form(){
        return view("frontend/advocate_login");
    }
    public function customer_login_form(){
        return view("frontend/login");
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
    public function advocate_register(Request $request){
        $advocate=new Advocate;
        $advocate->name=$request['name'];
        $advocate->gender=$request['gender'];
        $advocate->dob=$request['dob'];
        $advocate->email=$request['email'];
        $advocate->contact_no=$request['contact_no'];
        $advocate->address=$request['address'];
        $advocate->password=$request['password'];
        $advocate->country=$request['country'];
        $advocate->city=$request['city'];
        $advocate->state=$request['state'];
        $advocate->save();
        return redirect('/');
    }

    public function login(){
        return view("frontend/login");
    }
    public function customer_login(Request $request){
        $customer= new Customer;
        if($request['email']!=NULL && $request['password']!=NULL){
            $email=$request['email'];
            $customer_id=Customer::where('email','=','$email')->pluck('customer_id');
            if(is_null($customer_id)){
                return redirect('login');
            }else{
                $customer=Customer::where('email','=',$email)->get();
                $data1=compact('customer');
                $data=json_decode($customer,true);

                if($data[0]['password']==$request['password']){
                    // session($data);
                    // $request->session()->put('login','success');
                    return view('CustomerDashboard')->with($data1);
                }
                
            }
            
        }
        else{
            echo "error";
        }
    }
    public function advocate_login(Request $request){
        $advocate= new Advocate;
        if($request['email']!=NULL && $request['password']!=NULL){
            $email=$request['email'];
            $advocate_id=Advocate::where('email','=','$email')->pluck('customer_id');
            if(is_null($advocate_id)){
                return redirect('login');
            }else{
                $advocate=Advocate::where('email','=',$email)->get();
                $data1=compact('customer');
                $data=json_decode($advocate,true);

                if($data[0]['password']==$request['password']){
                    // session($data);
                    // $request->session()->put('login','success');
                    return view('CustomerDashboard')->with($data1);
                }
                
            }
            
        }
        else{
            echo "error";
        }
    }
}
