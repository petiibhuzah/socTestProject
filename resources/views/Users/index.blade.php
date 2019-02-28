@extends('layouts.app')

@section('content')
    <div class="col-md-12">
       <div class="row">
           @include('partials._leftNavBar')
           <div class="col-md-9">
               <div class="card text-dark">
                   <table class="table table-bordered table-light table-responsive">
                       <thead class="bg-dark text-white">
                       <th>NAME</th>
                       <th>EMAIL</th>
                       <th></th>
                       <th></th>
                       <th></th>
                       </thead>
                       <tbody>
                       @foreach($users as $user)
                           <tr>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td><a href="">EDIT</a></td>
                               <td><a href="">VIEW</a></td>
                               <td><a href="">DELETE</a></td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </div>
@endsection