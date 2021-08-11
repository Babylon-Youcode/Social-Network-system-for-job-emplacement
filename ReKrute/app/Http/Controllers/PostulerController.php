<?php

namespace App\Http\Controllers;

use App\Models\Postuler;
use Illuminate\Http\Request;

class PostulerController extends Controller
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
    public function postuler(Request $request)
    {
        $Postuler = new Postuler;
        $Postuler->emploi_id = $request->emploi_id;
        $Postuler->emploi_name = $request->emploi_name;
        $Postuler->recruteur_id = $request->recruteur_id;
        $Postuler->candidate_id = $request->candidate_id;
        $Postuler->candidate_name = $request->candidate_name;
       
        $save = $Postuler->save();
        
        if($save){
            return back()->with('success','You have successfuly Postuler ');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
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
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(Postuler $postuler)
    {
        return view('recruteur/postuler')->with('Postulers',Postuler::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function deletePostuler($id)
    {
        Postuler::destroy(array('id',$id));
        return back()->with('success','You have successfuly Deleted the Postuler ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postuler $postuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postuler $postuler)
    {
        //
    }
}
