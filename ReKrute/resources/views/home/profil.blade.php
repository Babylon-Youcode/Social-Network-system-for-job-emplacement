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
                <a href="{{ route('stages') }}"><span class="las la-list"></span>
                <span>offres de stages</span></a>
            </li>
            <li>
                <a href="" class="active"><span class="las la-users"></span>
                <span>profil</span></a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="">
                <span class="las la-users"></span>
            </label>

            Mon profil
        </h2>

    </header>

    <main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Profile</h1>
            <button type="submit" data-toggle="modal" class="btn mt-1  btn-primary  "  data-target="#update-modal"  >Update Profile <i class="fas fa-user"></i></button>     
          </div>
          @if(Session::get('success'))
          <div class="alert alert-success">
             {{ Session::get('success') }}
          </div>
        @endif
        <div class="row">
            <div class="col m-4">
               <h3>Name :<p class='m-4 text-muted'>{{Auth::user()->name}}</p></h3>
               <h3>Email :  <p class='m-4 text-muted'>{{Auth::user()->email}}</p></h3>
               <h3>Numero de telephone :  <p class='m-4 text-muted'>{{Auth::user()->num_tel}}</p></h3>
               <h3>Date de Naissance :  <p class='m-4 text-muted'>{{Auth::user()->dateNaiss}}</p></h3>
               <h3>Description :  <p class='m-4 text-muted'>{{Auth::user()->Description}}</p></h3>
               <h3>Mon cv :  <a href="" class='m-4 text-muted'>{{Auth::user()->cv}}</a></h3>
           </div>
           </div>
       
         
         
       
       
       
         {{-- update profile y--------------------}}
            <div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
                     <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                     <i class="fas fa-times"></i>
                     </button>
                   </div>
                   <div class="modal-body">
                     <form enctype="multipart/form-data" action="../update_profil/{{Auth::user()->id}}" method="GET">
                        @csrf
                        <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" name="name"  value="{{Auth::user()->name}}">
                           </div>
                           <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                           </div>
                           <div class="form-group">
                                <label>Num de Tel</label>
                                <input type="number" class="form-control" name="num_tel" value="{{Auth::user()->num_tel}}">
                         </div>
                         <div class="form-group">
                            <label>Date de Naissance</label>
                            <input type="date" class="form-control" name="dateNaiss" value="{{Auth::user()->dateNaiss}}">
                         </div>
                         <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="Description" value="{{Auth::user()->Description}}">
                         </div>
                         <div class="form-group">
                            <label>Mon cv</label>
                            <input type="file" class="form-control" name="cv" value="{{Auth::user()->cv}}">
                         </div>

                           <button type="submit" class="btn btn-block btn-primary">Update</button>
                        </form>   
                    </div>
                 </div>
               </div>
             </div>
    </main>
</div>
@endsection