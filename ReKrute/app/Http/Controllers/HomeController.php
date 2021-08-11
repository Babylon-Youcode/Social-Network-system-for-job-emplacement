<?php
   
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\emploi;
use Illuminate\Http\Request;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
     
        $emplois = Emploi::all();

        return view('home.home', [
            'emplois' => $emplois
        ]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = User::all();

        return view('recruteur.adminHome', [
            'users' => $users
        ]); }
    
}