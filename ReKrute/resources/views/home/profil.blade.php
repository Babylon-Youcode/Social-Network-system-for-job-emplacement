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
            <button type="submit" data-toggle="modal" class="btn mt-1  btn-success  "  data-target="#update-modal"  >Update Profile <i class="fas fa-user"></i></button>     
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
                     <form enctype="multipart/form-data" action="/client/update/{{Auth::user()->id}}" method="post">
                        @csrf
                        <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" name="name"  value="{{Auth::user()->name}}">
                           </div>
                           <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                           </div>

                           <button type="submit" class="btn btn-block btn-success">Update</button>
                        </form>   
                    </div>
                 </div>
               </div>
             </div>
    </main>
</div>
@endsection