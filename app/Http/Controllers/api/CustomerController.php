<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use CustomersSeeder;

class CustomerController extends Controller
{
    public function index(){
        return response(Customer::select('id','title')->get(),200);
    }

    public function store(Request $request){
        $customer = Customer::create($request->only('title'));
        return response(compact('customer'),201);
    }

    public function update($id,Request $request){
        $customer = Customer::find($id);
        $customer->update($request->only('title'));
        return response('Success',201);
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return response('deleted',201);
    }
}
