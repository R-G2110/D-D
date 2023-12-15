@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <h1 class="text-center">Info {{$character->name}}</h1>
        <div class="card justify-content-center w-50">

            @if ($character->image !== null)
                <img src="{{$character->image}}" class="card-img-top" alt="{{$character->name}}">
            @else
                <img src="/img/placeholder.webp" alt="{{$character->name}}">
            @endif

            <div class="card-body">
                <p><strong>Race:</strong> {{ $character->race?->name }}</p>
                <p class="card-text">Background: {{$character->background}}</p>
                <p class="card-text">Altezza: {{$character->height}} ,
                    Peso: {{$character->weight}}</p>
                <p class="card-text">Classe Armatura: {{$character->armor_class}}</p>
                <h4 class="card-text"> FOR: {{$character->FOR}}</h4>
                <h4 class="card-text"> DES: {{$character->DES}}</h4>
                <h4 class="card-text"> COS: {{$character->COS}}</h4>
                <h4 class="card-text"> INT: {{$character->INT}}</h4>
                <h4 class="card-text"> SAG: {{$character->SAG}}</h4>
                <h4 class="card-text"> CAR: {{$character->CAR}}</h4>


                <a href="{{ route('admin.characters.edit', $character)}}" class="btn btn-warning">Modifica</a>

                <form class="delete-btn d-inline-block" action="{{ route('admin.characters.destroy', $character) }}" method="POST"
                    onsubmit="return confirm('Sei sicuro di voler eliminare {{$character->name}}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Delete</button>
                </form>

        </div>
    </div>

@endsection

@section('title')
    | Homepage
@endsection
