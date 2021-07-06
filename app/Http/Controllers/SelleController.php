<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selle;
use App\Models\Part;
use App\Models\Customer;

class SelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selles = Selle::all();
        return view('selle.index',compact('selles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parts = Part::select(['id','title'])->get();
        $customers = Customer::select(['id','name'])->get();
        return view('selle.create',compact('parts','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selle = selle::create($request->all());
        return redirect('selle.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selle = selle::find($id);
        return view('selle.show',compact('selle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selle = Selle::find($id);
        $parts = Part::select(['id','title'])->get();
        $customers = Customer::select(['id','name'])->get();
        return view('selle.edit',compact('parts','customers','selle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $selle = selle::find($id);
        $selle->update($request->all());
        return redirect('selle/'.$selle->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $selle = selle::find($id)->delete();
        return redirect('selle');
    }
}
