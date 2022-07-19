@extends('comics.base')

@section('mainContent')
<h1>questa e la pagina</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div>
        <label for="id">id</label>
        <input type="text" name="id" id="id">
    </div>
    <div>
        <label for="title">title</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="price">price</label>
        <input type="text" name="price" id="price">
    </div>
    <div>
        <label for="series">series</label>
        <input type="text" name="series" id="series">
    </div>
    <div>
        <label for="sale_date">sale_date</label>
        <input type="text" name="sale_date" id="sale_date">
    </div>
    <div>
        <label for="type">type</label>
        <input type="text" name="type" id="type">
    </div>

    <button>Save</button>
</form>

@endsection
