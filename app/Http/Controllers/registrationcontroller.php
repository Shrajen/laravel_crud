<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function index()
    {
        $url = url('/form');
        $customer = new Customer();
        $title = 'Customer Registration';
        $data = compact('url', 'title','customer');
        return view('form')->with($data);
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

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('show');
        }
        else{
            $url = url('/update') . '/' .$id;
            $title = 'Update Entry';
            $data = compact('customer', 'url', 'title');
            return view('form')->with($data);
        }
    }

    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        // $customer->email = $request['email'];
        $customer->save();
        return redirect('show');
        // print_r($customer);
    }

}
