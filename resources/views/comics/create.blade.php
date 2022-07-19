@extends('comics.base')

@section('mainContent')
<h1 class="mb-3">INSERSCI I DATI DEL NUOVO FUMETTO</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="id">id</label>
        <input class="form-control" type="text" name="id" id="id">
        {{-- stampo l'errore di digitazione del form --}}
        @error('id')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="title">title</label>
        <input class="form-control" type="text" name="title" id="title">
        {{-- stampo l'errore di digitazione del form --}}
        @error('title')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">description</label>
        <input class="form-control" type="text" name="description" id="description">
        {{-- stampo l'errore di digitazione del form --}}
        @error('description')
        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label"  for="price">price</label>
        <input class="form-control" type="text" name="price" id="price">
         {{-- stampo l'errore di digitazione del form --}}
         @error('description')
         <div class="alert alert-danger" role="alert">
             {{$message}}
           </div>
         @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">series</label>
        <input class="form-control" type="text" name="series" id="series">
         {{-- stampo l'errore di digitazione del form --}}
         @error('series')
         <div class="alert alert-danger" role="alert">
             {{$message}}
           </div>
         @enderror
    </div>
    <div class="mb-3">
        <label class="form-label"  for="sale_date">sale_date</label>
        <input class="form-control" type="text" name="sale_date" id="sale_date">
         {{-- stampo l'errore di digitazione del form --}}
         @error('sale_date')
         <div class="alert alert-danger" role="alert">
             {{$message}}
           </div>
         @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="type">type</label>
        <input class="form-control" type="text" name="type" id="type">
         {{-- stampo l'errore di digitazione del form --}}
         @error('type')
         <div class="alert alert-danger" role="alert">
             {{$message}}
           </div>
         @enderror
    </div>

    <button  type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
