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

        <h1> Test </h1>


    </div>

</div>


<div class="outer-grid-container"> 
    <section class="grid-container">

        <div class="grid-item">
            <h2>About The Club Section</h2> 
            <p>Talk about what the club has to offer, try to be concise.</p>
            <!-- Add more about the club here -->
        </div>
    
    
    
    </section>
</div>


@endsection
