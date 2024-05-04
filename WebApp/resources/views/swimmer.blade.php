@extends('layout')
@section('default')

<head>
    <link href="/css/swimmer.css" rel="stylesheet">
</head>

<body>
    <div class="grid-container">

        <div class="personal-box">

            <h2>Surname</h2> {{--{{$user['surname']}}--}}
            <h2>Forename</h2> {{--{{$user['surname']}}--}}

            <h2>DOB</h2> {{--{{$user['surname']}}--}}
            <h2>Email</h2> {{--{{$user['surname']}}--}}


        </div>

        <div class="personal-box">
            <h1> Stats </h1>
            <p> bla bla </p>
        </div>


    </div>
</body>







@endsection