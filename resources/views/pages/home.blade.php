@extends('layouts.main-layout')

@section('content')
    <h1>Religion</h1>
    
    <ul>hh
        @foreach ($saints as $saint)
        <li>fs
            {{$saint['id']}} - {{$saint['first_name']}}
        </li>
        @endforeach
    </ul>
@endsection 