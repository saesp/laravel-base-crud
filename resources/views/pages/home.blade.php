@extends('layouts.main-layout')

@section('content')
    <h1>Religion</h1>
        <ul>
            @foreach ($saints as $saint)
            <li>
                {{$saint->id}} - {{$saint->first_name}}
            </li>
            @endforeach
        </ul>
@endsection 