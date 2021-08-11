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
                <a href="/emploi"><span class="las la-igloo"></span>
                <span>offres d'emplois</span></a>
            </li>
            <li>
                <a href="#"><span class="las la-list"></span>
                <span>offres de stages</span></a>
            </li>
            <li>
                <a href="/showPostuler" class="active"><span class="las la-users"></span>
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

            Mes offres
        </h2>
        <button type="submit" data-toggle="modal" class="btn mt-1  btn-success  "  data-target="#add-emploi"  ><i class="fas fa-plus-square"></i> Add emploi </button>    

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
            @if ( $emploi->recruteur_id == Auth::user()->id)
            <tr>
                <td>{{$emploi->id}}</td>
                <td>{{$emploi->titre}}</td>
                <td>{{$emploi->domaine}}</td>
                <td>{{$emploi->ville}}</td>
                <td>{{$emploi->condition}}</td>
                <td>{{$emploi->datedebut}}</td>
                <td>{{$emploi->datefin}}</td>
                <td><a href="../delete/{{$emploi->id}}">Delete</a> | <button type="submit" data-toggle="modal" class="btn mt-1  btn-primary  "  data-target="#update-modal{{$emploi->id}}" >Update emploi <i class="fas fa-user"></i></button>     
                </td>
            </tr>

            <div class="modal fade" id="update-modal{{$emploi->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="staticBackdropLabel">Update emploi</h3>
                      <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                      <i class="fas fa-times"></i>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form enctype="multipart/form-data" action="../update_emploi/{!! $emploi->id !!}" method="GET">
                         @csrf
                         <div class="form-group">
                               <label>titre</label>
                               <input type="text" class="form-control" name="titre"  value="{!! $emploi->titre !!}">
                            </div>
                            <div class="form-group">
                               <label>domaine</label>
                               <input type="text" class="form-control" name="domaine" value="{!! $emploi->domaine !!}">
                            </div>
                            <div class="form-group">
                                 <label>ville</label>
                                 <input type="text" class="form-control" name="ville" value="{!! $emploi->ville !!}">
                          </div>
                          <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="condition" value="{!! $emploi->condition !!}">
                         </div>
                          <div class="form-group">
                             <label>Date de debut</label>
                             <input type="date" class="form-control" name="datedebut" value="{!! $emploi->datedebut !!}">
                          </div>
                          <div class="form-group">
                            <label>Date de fin</label>
                            <input type="date" class="form-control" name="datefin" value="{!! $emploi->datefin !!}">
                         </div>
                    
                         <input type="hidden" name="recruteur_id" value='{{Auth::user()->id }}'>
                            <button type="submit" class="btn btn-block btn-primary">Update</button>
                         </form>   

                     </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
    </table>

    <div class="modal fade" id="add-emploi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="staticBackdropLabel">Add Project</h3>
              <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
              <form enctype="multipart/form-data" action="/home/addProject" method="post">
                 @csrf
                 <div class="form-group">
                       <label>titre</label>
                       <input type="text" class="form-control" name="titre" >
                    </div>
                    <div class="form-group">
                    <label>domaine</label>
                    <select class="form-control" name="domaine" id="">
                      <option value=""></option>
                      <option value="Websites, IT & Software">Websites, IT & Software</option>
                      <option value="Design, Media & Architecture">Design, Media & Architecture</option>
                      <option value="Data Entry & Admin">Data Entry & Admin</option>
                      <option value="Translation & Languages ">Translation & Languages </option>
                      <option value="Writing & Content">Writing & Content</option>
                      <option value="Other ">Other </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>ville</label>
                    <select class="form-control" name="ville" id="">
                      <option value=""></option>
                      <option value="Casablanca">Casablanca</option>
                      <option value="Rabat">Rabat</option>
                      <option value="Agadir">Agadir</option>
                      <option value="Marrakech">Marrakech</option>
                      <option value="Tanger">Tanger</option>
                      <option value="Other ">Other </option>
                    </select>
                 </div>
                    <div class="form-group">
                       <label>Description</label>
                       <textarea class="form-control" name="condition" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label>datedebut</label>
                      <input type="date" class="form-control" name="datedebut" >
                   </div>
                   <div class="form-group">
                    <label>datefin</label>
                    <input type="date" class="form-control" name="datefin" >
                 </div>
    
                  <input type="hidden" name="recruteur_id" value='{{Auth::user()->id }}'>
                    <button type="submit" class="btn btn-block btn-success">Add</button>
                 </form>   
             </div>
          </div>
        </div>
      </div>


               {{-- update emploi y--------------------}}

    </main>
</div>
@endsection
