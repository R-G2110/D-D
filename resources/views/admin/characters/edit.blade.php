@extends('layouts.admin')

@section('content')

    <div class="container my-5">
        <h1 class="text-center">Modifica {{$character->name}}</h1>

        @if($errors->any())
        <div class="alert alert-danger" role="alert" >
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row mb-4">
            <div class="col-8">
                <form action="{{ route('admin.characters.update',$character) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome personaggio</label>
                        <input type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        name="name"
                        value="{{ old('name', $character->name) }}"
                        >
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="race_id" class="form-label">Razza</label>
                        <select class="form-select" name="race_id" id="race_id">
                            <option value="">Seleziona una Razza</option>

                            @foreach ($races as $race)
                            <option
                            value="{{$race->id}}"
                            {{ old('race_id', $character?->race_id) == $race->id?'selected' : '' }}>
                            {{$race->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text"
                        class="form-control @error('image') is-invalid @enderror"
                        id="image"
                        name="image"
                        value="{{ old('image', $character->image) }}"
                        >
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="height" class="form-label">Altezza</label>
                        <input type="number"
                        class="form-control @error('height') is-invalid @enderror"
                        id="height"
                        name="height"
                        value="{{ old('height', $character->height) }}"
                        >
                        @error('height')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label">Peso</label>
                        <input type="number"
                        class="form-control @error('weight') is-invalid @enderror"
                        id="weight"
                        name="weight"
                        value="{{ old('weight', $character->weight) }}"
                        >
                        @error('weight')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="background" class="form-label">Background</label>
                        <input type="text"
                        class="form-control @error('background') is-invalid @enderror"
                        id="background"
                        name="background"
                        value="{{ old('background', $character->background) }}"
                        >
                        @error('background')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="armor_class" class="form-label">Classe armatura</label>
                        <input type="text"
                        class="form-control @error('armor_class') is-invalid @enderror"
                        id="armor_class"
                        name="armor_class"
                        value="{{ old('armor_class', $character->armor_class) }}"
                        >
                        @error('armor_class')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="FOR" class="form-label">Forza</label>
                        <input type="number"
                        class="form-control @error('FOR') is-invalid @enderror"
                        id="FOR"
                        name="FOR"
                        value="{{ old('FOR', $character->FOR) }}"
                        >
                        @error('FOR')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="DES" class="form-label">Destrezza</label>
                        <input type="number"
                        class="form-control @error('DES') is-invalid @enderror"
                        id="DES"
                        name="DES"
                        value="{{ old('DES', $character->DES) }}"
                        >
                        @error('DES')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="COS" class="form-label">Costituzione</label>
                        <input type="number"
                        class="form-control @error('COS') is-invalid @enderror"
                        id="COS"
                        name="COS"
                        value="{{ old('COS', $character->COS) }}"
                        >
                        @error('COS')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="INT" class="form-label">Intelletto</label>
                        <input type="number"
                        class="form-control  @error('INT') is-invalid @enderror"
                        id="INT"
                        name="INT"
                        value="{{ old('INT', $character->INT) }}"
                        >
                        @error('INT')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="SAG" class="form-label">Saggezza</label>
                        <input type="number"
                        class="form-control @error('SAG') is-invalid @enderror"
                        id="SAG"
                        name="SAG"
                        value="{{ old('SAG', $character->SAG) }}"
                        >
                        @error('SAG')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="CAR" class="form-label">Carisma</label>
                        <input type="number"
                        class="form-control @error('CAR') is-invalid @enderror"
                        id="CAR"
                        name="CAR"
                        value="{{ old('CAR', $character->CAR) }}"
                        >
                        @error('CAR')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>

                </form>
            </div>
        </div>
    </div>

@endsection
