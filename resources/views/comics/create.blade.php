@extends('comics.base')

@section('mainContent')
<h1 class="mb-3">INSERSCI I DATI DEL NUOVO FUMETTO</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="id">id</label>
        <input class="form-control" type="text" name="id" id="id">
    </div>
    <div class="mb-3">
        <label class="form-label" for="title">title</label>
        <input class="form-control" type="text" name="title" id="title">
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">description</label>
        <input class="form-control" type="text" name="description" id="description">
    </div>
    <div class="mb-3">
        <label class="form-label"  for="price">price</label>
        <input class="form-control" type="text" name="price" id="price">
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">series</label>
        <input class="form-control" type="text" name="series" id="series">
    </div>
    <div class="mb-3">
        <label class="form-label"  for="sale_date">sale_date</label>
        <input class="form-control" type="text" name="sale_date" id="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label" for="type">type</label>
        <input class="form-control" type="text" name="type" id="type">
    </div>

    <button  type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
