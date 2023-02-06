@extends('layouts.main-layout')


@section('content')
    <form  method="POST" action="{{ route('saints.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="birth_place">Birth place</label>
        <input type="text" name="birth_place">
        
        <label for="blassing_date">Blassing date</label>
        <input type="text" name="blassing_date">

        <label for="miracles_count">Num. miiracles</label>
        <input type="date" name="miracles_count">

        <input type="submit" value="CREATE NEW SAINT">
    </form>
@endsection