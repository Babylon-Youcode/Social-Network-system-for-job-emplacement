<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return view('home.profil', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        // return $request->input('name');

        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->num_tel = $request->input('num_tel');
        $users->dateNaiss = $request->input('dateNaiss');
        $users->Description = $request->input('Description');
        $users->cv = $request->input('cv');
        $save=  $users->save();
        if ($save) {
            return redirect('home.profil');
            }    }

    function edit(Request  $request, $id){
        $users = User::all();

        $users->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'is_admin'=>'required',
            'num_tel'=>'required',
            'dateNaiss'=>'required',
            'Description'=>'required',
            'cv'=>'required',
           
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->num_tel = $request->num_tel;
        $users->dateNaiss = $request->dateNaiss;
        $users->Description = $request->Description;
        $users->cv = $request->cv;
        $users->save();
        return back();
    }

    public function update(Request  $request, $id){
        
       

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->num_tel = $request->input('num_tel');
        $users->dateNaiss = $request->input('dateNaiss');
        $users->Description = $request->input('Description');
        $users->cv = $request->input('cv');
        $save=  $users->save();
        if ($save) {
        return redirect('home.profil')->with('success','You have successfuly update your profile');
        }
   }
}
