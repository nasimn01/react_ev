<?php

namespace App\Http\Controllers;

use App\Models\addmission;
use Illuminate\Http\Request;

class AddmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addmission = addmission::all();
        return view('addmission.index',compact('addmission'));
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
     * @param  \App\Models\addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function show(addmission $addmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function edit(addmission $addmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addmission $addmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(addmission $addmission)
    {
        //
    }
}
