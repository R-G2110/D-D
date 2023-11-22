@extends('layouts.main')

@section('content')

    <div class="container mt-5">
        <h1 class="text-center mb-4"> D&D Characters</h1>
        <div class="row">
            @foreach ($characters as $character)
                <div class="col-4 h-100 mb-4">
                    <div class="card"">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                        <h5 class="card-title">Nome: {{$character->name}}</h5>
                        <p class="card-text">Background: {{$character->background}}</p>
                        <a href="#" class="btn btn-primary">Più info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('title')
    | Homepage
@endsection
