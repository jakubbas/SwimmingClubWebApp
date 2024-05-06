@extends('layout')

@section('default')

<head>
    <link href="/css/home.css" rel="stylesheet">
</head>


<div class="hero">
    <div class="hero-slider">

        @php
        $newheroimages = array("/images/hero1.jpg", "/images/hero2.jpg", "/images/hero3.jpg");
        @endphp

        @foreach($newheroimages as $image)
            <div class="slide" style="background-image: url('{{ $image }}');"></div>
        @endforeach

        <div class="slide" style="background-image: url('{{ $newheroimages[0] }}');"></div>

    </div>

    <div class="slide-content">

        <h1> Join Us Today! </h1>

        <p> Begin your swimming journey. </p>

        <a href="/register" class="slide-button">Click Here</a>
    </div>

</div>


<div class="outer-grid-container"> 
    <section class="grid-container">

        <div class="grid-item">
            <h2>About The Club</h2> 
        </div>
    
        <div class="grid-item">
            <p>Talk about what the club has to offer, try to be concise. Talk about what the club has to offer, try to be concise. Talk about what the club has to offer, try to be concise.</p>
        </div>

        <div class="grid-item">
            <h2>Something Else</h2> 
        </div>
    
        <div class="grid-item">
            <p>Talk about what the club has to offer, try to be concise. Talk about what the club has to offer, try to be concise. Talk about what the club has to offer, try to be concise.</p>
        </div>
    
    </section>
</div>


@endsection
