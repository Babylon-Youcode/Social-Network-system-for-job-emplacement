<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplois = Emploi::all();

        return view('home.home', [
            'emplois' => $emplois
        ]);
    }
    public function indexs()
    {
        $emplois = Emploi::all();

        return view('home.mesoffres', [
            'emplois' => $emplois
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          //Validate requests
    $request->validate([
        'titre'=>'required',
        'domaine'=>'required',
        'ville'=>'required',
        'condition'=>'required',
        'datedebut'=>'required',
        'datefin'=>'required',
    ]);

     //Insert data into database
     $emplois = new Emploi;
     $emplois->titre = $request->titre;
     $emplois->domaine = $request->domaine;
     $emplois->ville = $request->ville;
     $emplois->condition = $request->condition;
     $emplois->datedebut = $request->datedebut;
     $emplois->datefin = $request->datefin;
     $save = $emplois->save();

     if($save){
        return redirect('home.mesoffres');
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
     * @param  \App\Models\emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function show(emploi $emploi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function edit(emploi $emploi, $id)
    {
        $emplois = Emploi::all();

        $emplois->validate([
            'titre'=>'required',
            'domaine'=>'required',
            'ville'=>'required',
            'condition'=>'required',
            'datedebut'=>'required',
            'datefin'=>'required',
           
        ]);
        $emplois = Emploi::find($id);
        $emplois->titre = $request->titre;
        $emplois->domaine = $request->domaine;
        $emplois->ville = $request->ville;
        $emplois->condition= $request->condition;
        $emplois->datedebut = $request->datedebut;
        $emplois->datefin = $request->datefin;
        $emplois->save();
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emploi $emploi, $id)
    {
        $emplois = Emploi::find($id);
        $emplois->titre = $request->input('titre');
        $emplois->domaine = $request->input('domaine');
        $emplois->ville = $request->input('ville');
        $emplois->condition = $request->input('condition');
        $emplois->datedebut = $request->input('datedebut');
        $emplois->datefin = $request->input('datefin');
        $save=  $emplois->save();
        if ($save) {
        return redirect('home.mesoffres')->with('success','You have successfuly update your profile');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emploi  $emploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(emploi $emploi, $id)
    {
        Emploi::destroy(array('id',$id));
        return redirect('home.mesoffres');
    }
}
