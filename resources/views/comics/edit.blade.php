@extends('comics.base')

@section('mainContent')

<h1 class="mb-3"> MODIFICA I DATI DEL FUMETTO {{ $comic->title }} </h1>


{{-- impostiamo la route del form ad update --}}
<form action="{{ route('comics.update') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="id">id</label>
        {{-- passiamo il dato che scrivera l'utente nella value --}}
        <input class="form-control" type="text" name="id" id="id" value="{{ $comic->id }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="title">title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">description</label>
        <input class="form-control" type="text" name="description" id="description" value="{{ $comic->description }}">
    </div>
    <div class="mb-3">
        <label class="form-label"  for="price">price</label>
        <input class="form-control" type="text" name="price" id="price" value="{{ $comic->price }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">series</label>
        <input class="form-control" type="text" name="series" id="series" value="{{ $comic->series }}">
    </div>
    <div class="mb-3">
        <label class="form-label"  for="sale_date">sale_date</label>
        <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="type">type</label>
        <input class="form-control" type="text" name="type" id="type" value="{{ $comic->type }}">
    </div>

    <button  type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
