@extends('layouts.app')
   
@section('content')
   
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><a>YouReKrute</a></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{ route('admin.home') }}"><span class="las la-list"></span>
                <span>Liste des Candidats</span></a>
            </li>
            <li>
                <a href="/"><span class="las la-igloo"></span>
                <span>offres d'emplois</span></a>
            </li>
            <li>
                <a href="#"><span class="las la-list"></span>
                <span>offres de stages</span></a>
            </li>
            <li>
                <a href="#" class="active"><span class="las la-users"></span>
                <span>mes Postulers</span></a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="">
                <span class="las la-bars"></span>
            </label>

            Les Postulers
        </h2>
       
    </header>

    <main>
        @if(Session::get('success'))
        <div class="alert alert-success">
           {{ Session::get('success') }}
        </div>
        @endif
        <table class="table">
            <tr>
                <td>Id</td>
                <td>emploi_id</td>
                <td>emploi_name</td>
                <td>candidate_id</td>
                <td>candidate_name</td>
                <td></td>
                
                
            </tr>
            @foreach($Postulers as $Postuler)
            {{-- @if ( $Postuler->recruteur_id == Auth::user()->id) --}}
            <tr>
                <td>{{$Postuler->id}}</td>
                <td>{{$Postuler->emploi_id}}</td>
                
                <td>{{$Postuler->emploi_name}}</td>
                <td>{{$Postuler->candidate_id}}</td>
                <td>{{$Postuler->candidate_name}}</td>
              
                <td><a class="btn btn-danger" href="/deletePostuler/{{$Postuler->id}}">Delete</a>  
                </td>
            </tr>

              {{-- @endif --}}
            @endforeach
    </table>

  

               {{-- update emploi y--------------------}}

    </main>
</div>
@endsection
