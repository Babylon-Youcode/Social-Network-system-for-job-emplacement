@extends('layouts.app')
   
@section('content')
   
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><a href="{{ route('admin.home') }}">YouReKrute</a></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="" class="active"><span class="las la-list"></span>
                <span>Liste des Candidats</span></a>
            </li>
            <li>
                <a href="/home"><span class="las la-igloo"></span>
                <span>offres d'emplois</span></a>
            </li>
            <li>
                <a href="{{ route('stages') }}"><span class="las la-list"></span>
                <span>offres de stages</span></a>
            </li>
            <li>
                <a href=""><span class="las la-users"></span>
                <span>mes offres</span></a>
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

            Liste des Candidats
        </h2>

    </header>

    <main>
        <table class="table">
            <tr>
                <td>Id</td>
                <td>name</td>
                <td>email</td>
                <td>createdat</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
            @endforeach

    </table>
    </main>
</div>
@endsection
