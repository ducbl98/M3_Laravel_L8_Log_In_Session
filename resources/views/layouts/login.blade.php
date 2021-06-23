@extends('layouts.welcome')
@section('content')
    <div class="title m-b-md">
        Login
    </div>
    @if(session()->has('login-fail'))\
    <div class="alert alert-primary">
        <p class="text-danger">{{session()->get('login-fail')}}</p>
    </div>
    @endif
    @if (session()->has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ session()->get('not-login') }}</p>
        </div>
    @endif
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter Username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
