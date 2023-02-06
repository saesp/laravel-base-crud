@extends('layouts.main-layout')

@section('content')
    <h2>Saints</h2>

    <div>
        <a href="{{ route('saints.create') }}">ADD SAINT</a>
    </div>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="/saints/{{$saint ->id}}">{{$saint->id}} | {{$saint->name}}</a> 
                <a href="/saints/delete/{{$saint ->id}}"> - delete</a>
            </li>
        @endforeach
    </ul>
@endsection 
