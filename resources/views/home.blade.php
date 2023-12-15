@extends('layouts.guest')

@section('content')

<div class="container my-5 align-items-center d-flex flex-column ">
    <div>Welcome to our fabolous D&D character displayer</div>

    <div><a class="btn btn-success my-5" href="{{route('login')}}">Login as an Admin</a></div>
</div>

@endsection
