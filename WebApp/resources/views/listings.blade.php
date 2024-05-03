<?php /*

<h1> <?php echo $heading; ?> </h1>


<?php foreach($listings as $listing) : ?>
    <h2> <?php echo $listing['title']; ?></h2>
    <p> <?php echo $listing['description']; ?> </p>

    <?php endforeach; ?>


<h1> {{$heading}} </h1>
*/?>


{{-- ^ PHP.     v blade.php--}}

@if(count($listings) == 0)

<p> No listings found </p>

@endif

@foreach($listings as $listing)

    <h2>
        
    <a href = "/listings/{{$listing['id']}}">{{$listing['title']}}
    </a>
    </h2>
    <p> 
        {{$listing['description']}} 
    </p>

@endforeach


@php

$test = 1;

@endphp

{{$test}}