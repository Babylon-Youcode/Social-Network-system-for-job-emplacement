@extends('layouts.app')
   
@section('content')
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><a href="{{ route('admin.home') }}">YouReKrute</a></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="home" class="active"><span class="las la-igloo"></span>
                <span>offres d'emplois</span></a>
            </li>
            <li>
                <a href="{{ route('stages') }}"><span class="las la-list"></span>
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

            offres d'emplois
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
            @foreach($emplois as $emploi)
            <tr>
                <td>{{$emploi->id}}</td>
                <td>{{$emploi->titre}}</td>
                <td>{{$emploi->domaine}}</td>
                <td>{{$emploi->ville}}</td>
                <td>{{$emploi->condition}}</td>
                <td>{{$emploi->datedebut}}</td>
                <td>{{$emploi->datefin}}</td>
            </tr>

            @endforeach
    </table>
    </main>
</div>
@endsection