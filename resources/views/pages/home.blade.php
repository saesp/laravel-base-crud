@extends('layouts.main-layout')

@section('content')
    <h2>Saints</h2>
    
    <ul>
        @foreach ($saints as $saint)

        <a href="/saints/{{$saint ->id}}">
            <li>
                {{$saint->id}} - {{$saint->name}}
            </li>
        </a>

        @endforeach
    </ul>
@endsection 
