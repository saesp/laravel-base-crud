@extends('layouts.main-layout')

@section('content')
    <h2>Saints</h2>
    
    <ul>
        @foreach ($saints as $saint)
        <li>
            {{$saint->id}} - {{$saint->first_name}}
        </li>
        
        @endforeach
    </ul>
@endsection 
