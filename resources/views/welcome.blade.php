@extends('layouts.web')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to {{ config('app.name') }}</h1>
    <p class="lead">Presenting By: Rajeev Bharti  </p>  
     <hr class="my-4">
   
    <a class="btn btn-success btn-lg" href="/user-login" role="button">User Login</a>
    <a class="btn btn-primary btn-lg" href="/admin-login" role="button">Admin Login</a>
    <a class="btn btn-warning btn-lg" href="/provider-login" role="button">Service Provider Login</a>
    <hr class="my-4">

    <p ><b>Login Credentials</b></br>This Credentials  are using only for Demo</p>
    <div class="row">
        <div class="col-4">
            <p><b>Admin</b></p>
            <p>User: admin@example.com</br>Password: admin@123</p>

        </div>
        <div class="col-4">
            <p><b>Service Provider</b></p>
            <p>User: service1@example.com</br>Password: service@123</p>
            <p>User: service2@example.com</br>Password: service@123</p>
        </div>
        <div class="col-4">
            <p><b>User</b></p>
            <p>User: user1@example.com</br>Password: user@123</p>
            <p>User: user2@example.com</br>Password user@123</p>
        </div>
    </div>

</div>
@endsection
