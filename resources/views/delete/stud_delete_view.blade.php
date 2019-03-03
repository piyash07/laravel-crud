@extends('main_layout')

@section('content')

     <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Check out — it’s free!
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 mx-auto">
            <div class="myform form ">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">City_name</th>
                     <th scope="col">Password</th>
                     <th scope="col">Action</th>
                     <th scope="col">Action</th>
                   </tr>
                 </thead>
                 @foreach($users as $user)
                 <tbody>
                   <tr>
                     <th scope="row">{{ $user->id }}</th>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->city_name }}</td>
                     <td>{{ $user->password }}</td>
                     <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
                     <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
                   </tr>
                 </tbody>
                 @endforeach
               </table>
            </div>
         </div>
      </div>
   </div>
@endsection