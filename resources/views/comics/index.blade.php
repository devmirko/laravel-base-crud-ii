@extends('comics.base')

@section('mainContent')
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>

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
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
