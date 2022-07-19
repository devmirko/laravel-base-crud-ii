@extends('comics.base')

@section('mainContent')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
            <th colspan="3">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">View</a>
                </td>
                <td>
                    <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
