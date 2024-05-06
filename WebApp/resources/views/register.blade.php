@extends('layout')

@section('default')


<head>
    <link href="/css/login.css" rel="stylesheet">
</head>

<body>

    <div class="login-container">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf 
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="forename">Forename:</label>
                <input type="text" id="forename" name="forename" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="/login">Login here</a></p>
    </div>
    
    </body>



@endsection