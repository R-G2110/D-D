@extends('layouts.main')

@section('content')

    <div class="container mt-5">
        {{-- stampo l'alert solo se esiste la variabile di sessione inviata dal metodo destroy del controller --}}
        @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
        @endif

        <h1 class="text-center mb-4"> D&D Characters</h1>
        <div class="row">
            @foreach ($characters as $character)
                <div class="col-4 h-100 mb-4">
                    <div class="card"">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">Nome: {{$character->name}}</h5>
                            <p class="card-text">Background: {{$character->background}}</p>
                            <a href="{{ route('characters.show', $character)}}" class="btn btn-primary">Più info</a>
                            <a href="{{ route('characters.edit', $character)}}" class="btn btn-warning">Modifica</a>

                            <form class="delete-btn d-inline-block" action="{{ route('characters.destroy', $character) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare {{$character->name}}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$characters->links()}}
    </div>

@endsection

@section('title')
    | Lista Personaggi
@endsection
