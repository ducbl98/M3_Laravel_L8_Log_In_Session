@extends('layouts.welcome')
@section('content')
    <div class="title m-b-md">
        Raising the bar
    </div>
    <a href="{{route('user.logout')}}">
        <button type="button" class="btn btn-outline-primary">Log out</button>
    </a>
    <hr>
@endsection
