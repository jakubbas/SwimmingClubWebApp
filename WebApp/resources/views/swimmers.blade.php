@extends('layout')
@section('default')

<head>
    <link href="/css/swimmers.css" rel="stylesheet">
</head>

<form action="/search" method="GET">
    <input type="text" name="forename" placeholder="Forename">
    <input type="text" name="surname" placeholder="Surname">
    <button type="submit">Search</button>
</form>


@if (isset($forename) || isset($surname))
    <p>Search results for: {{ $forename }} {{ $surname }}</p>

@foreach ($users as $user)

<a href="/swimmers/{{ $user->id }}" class="user-box">
    <div>
        <p class="user-name">{{ $user->forename }} {{ $user->surname }}</p>
        <!-- Add additional user information here if needed -->
    </div>
</a>

@endforeach



@endif








@endsection