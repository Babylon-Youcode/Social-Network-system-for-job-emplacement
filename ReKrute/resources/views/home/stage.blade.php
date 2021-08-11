@extends('layouts.app')
   
@section('content')
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><a href="{{ route('admin.home') }}">YouReKrute</a></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="home"><span class="las la-igloo"></span>
                <span>offres d'emplois</span></a>
            </li>
            <li>
                <a href="" class="active"><span class="las la-list"></span>
                <span>offres de stages</span></a>
            </li>
            <li>
                <a href="{{ route('profil') }}"><span class="las la-users"></span>
                <span>profil</span></a>
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

            offres de stages
        </h2>

    </header>

    <main>
        <table class="table">
            <tr>
                <td>Id</td>
                <td>titre</td>
                <td>domaine</td>
                <td>ville</td>
                <td>description</td>
                <td>datedebut</td>
                <td>datefin</td>
            </tr>
            @foreach($stages as $stage)
            <tr>
                <td>{{$stage->id}}</td>
                <td>{{$stage->titre}}</td>
                <td>{{$stage->domaine}}</td>
                <td>{{$stage->ville}}</td>
                <td>{{$stage->condition}}</td>
                <td>{{$stage->datedebut}}</td>
                <td>{{$stage->datefin}}</td>
                <td><button type="button" class="btn btn-success">Postuler</button></td>
            </tr>

            @endforeach
    </table>
    </main>
</div>
@endsection