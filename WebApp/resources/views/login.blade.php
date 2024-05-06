@extends('layout')

@section('default')


<head>
    <link href="/css/login.css" rel="stylesheet">
</head>

<body>


    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            @csrf <!-- CSRF protection for Laravel -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/register">Register here</a></p>
    </div>

</body>


@endsection
