<?php

namespace App\Http\Controllers;

use App\Licor;
use Illuminate\Http\Request;

class LicorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function show(Licor $licor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function edit(Licor $licor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licor $licor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licor  $licor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licor $licor)
    {
        //
    }

    //metodos del api

    public function licores(){
        return Licor::all();
    }

}
