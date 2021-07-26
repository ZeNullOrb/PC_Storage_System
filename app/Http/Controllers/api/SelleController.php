<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Customer;
use App\Models\Selle;
use SellesSeeder;

class selleController extends Controller
{
    public function index(){
        return response(Selle::select('id','part_id','title','status')->get(),200);
    }

    public function store(Request $request){
        $parts = part::select(['id','title'])->get();
        $customers = Customer::select(['id','name'])->get();
        $selle = Selle::create($request->all());
        return response(compact('selle','parts','customers'),201);
    }

    public function update($id,Request $request){
        $selle = Selle::find($id);
        $selle->update($request->all());
        return response('Success',201);
    }

    public function delete($id){
        $selle = Selle::find($id);
        $selle->delete();
        return response('deleted',201);
    }
}
