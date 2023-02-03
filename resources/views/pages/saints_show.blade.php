@extends('layouts.main-layout')

@section('content')
    <h3>{{$saints -> id}} - {{$saints -> name}} </h3>

    <div>{{$saints -> birth_place}} (place of birth) - {{$saints -> blessing_date }} (date of blessing) - {{$saints -> miracles_count}} miracles</div>
@endsection