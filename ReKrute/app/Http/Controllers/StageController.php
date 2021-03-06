<?php

namespace App\Http\Controllers;

use App\Models\stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = Stage::all();

        return view('home.stage', [
            'stages' => $stages
        ]);
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
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(stage $stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(stage $stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stage $stage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(stage $stage)
    {
        //
    }
}
