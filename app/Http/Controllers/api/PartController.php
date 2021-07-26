<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Part;
use PartsSeeder;

class PartController extends Controller
{
    public function index(){
        return response(Part::select('id','title')->get(),200);
    }

    public function store(Request $request){
        $part = Part::create($request->only('title'));
        return response(compact('part'),201);
    }

    public function update($id,Request $request){
        $part = Part::find($id);
        $part->update($request->only('title'));
        return response('Success',201);
    }

    public function delete($id){
        $part = Part::find($id);
        $part->delete();
        return response('deleted',201);
    }
}
