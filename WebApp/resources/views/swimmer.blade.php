@extends('layout')
@section('default')

<head>
    <link href="/css/swimmer.css" rel="stylesheet">
</head>

<body>
    <div class="grid-container">

        <div class="personal-box">

            <h2>Surname: {{$user['surname']}}</h2>
            <h2>Forename: {{$user['forename']}}</h2>

            <h2>Date of Birth: {{$user['date-of-birth']}}</h2>
            <h2>Email: {{$user['email']}}</h2>

        </div>

        <div class="personal-box">
            <h1> Gala Records </h1>

            @php

$galas = [
    [
        'date' => '2024-05-10',
        'records' => [
            ['swim_type' => 'Freestyle', 'placement' => '1st', 'time' => '1:05.20'],
            ['swim_type' => 'Backstroke', 'placement' => '2nd', 'time' => '1:15.45'],
            ['swim_type' => 'Breaststroke', 'placement' => '3rd', 'time' => '1:20.30'],
        ]
    ],
    [
        'date' => '2024-05-15',
        'records' => [
            ['swim_type' => 'Freestyle', 'placement' => '2nd', 'time' => '1:10.15'],
            ['swim_type' => 'Backstroke', 'placement' => '3rd', 'time' => '1:18.50'],
            ['swim_type' => 'Breaststroke', 'placement' => '1st', 'time' => '1:12.40'],
        ]
    ],
    // Add more gala records as needed
];
            @endphp

            <table id="gala-records">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Swim Type</th>
                        <th>Placement</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galas as $gala)
                        @foreach($gala['records'] as $record)
                            <tr>
                                <td>{{ $gala['date'] }}</td>
                                <td>{{ $record['swim_type'] }}</td>
                                <td>{{ $record['placement'] }}</td>
                                <td>{{ $record['time'] }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>






            

        </div>


    </div>
</body>







@endsection