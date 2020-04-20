<?php

namespace App\Http\Controllers\API;

use App\First;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return First::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = new First();
        $rec->product_name = $request->product_name;
        $rec->piece = $request->piece;
        $rec->color = $request->color;
        $rec->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function show(First $first)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function edit(First $first)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request;
//        $rec = First::find($id);
//        $rec->product_name = $request->product_name;
//        $rec->piece = $request->piece;
//        $rec->color = $request->color;
//        $rec->save();

//        return $rec;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function destroy(First $first)
    {
        //
    }
}
