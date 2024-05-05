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
            <table id="table-records">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Swim Type</th>
                        <th>Time</th>
                        <th>Placement</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->galas as $gala)

                        <tr>
                            <td>{{ $gala['gala-date'] }}</td>
                            <td>{{ $gala['swim-type'] }}</td>
                            <td>{{ $gala['time'] }}</td>
                            <td>{{ $gala['place'] }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div> </div>

        <div class="personal-box">
            <h1> Swim Records </h1>
            <table id="table-records">
                <thead>
                    <tr>
                        <th>Freestyle</th>
                        <th>Backstroke</th>
                        <th>Breaststroke</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->swims as $swim)
                        <tr>
                            <td>{{ $swim['freestyle-time'] }}</td>
                            <td>{{ $swim['backstroke-time'] }}</td>
                            <td>{{ $swim['breaststroke-time'] }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>






            

        </div>


    </div>
</body>







@endsection