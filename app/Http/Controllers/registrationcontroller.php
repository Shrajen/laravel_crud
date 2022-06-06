<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request){
        $request -> validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'

            ]
            );

       $customer = new Customer;
  
         $customer->name = $request['name'];
         $customer->email = $request['email'];
         $customer->password=md5($request["password"]);
         $customer->save();
        
         return redirect('/show');
        // echo '<pre>';
        // print_r($request->all());
        
    }

    public function show(){
        $customer = Customer::all();
        // echo '<pre>';
        // print_r($customer->all());
        $data = compact('customer');
        return view('customer-output')->with($data);

    }


    public function delete($id){
        $customer = Customer::find($id)->delete();
        return redirect()->back();
    }
}
