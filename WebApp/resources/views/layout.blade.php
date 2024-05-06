<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/layout.css" rel="stylesheet">
    <title>Swimming Club</title>


</head>

<nav class="navbar">
    <div class="logo">
      <a href="/home">
        <img src="images/swimming-logo.jpg" alt="Logo">
      </a>
    </div>
    <ul class="nav-links">
      <li><a href="/home">Home</a></li>
      <li><a href="/swimmers">Swimmers</a></li>
      @auth
      <li> 
        <form method="POST" action="/logout" class="logout-form">
          @csrf
          <button type="submit" class="logout-button">Log out of {{auth()->user()->name}}</button>
        </form>
      </li>
      @else
      <li><a href="/login">Log In</a></li>
      @endauth
    </ul>
  </nav>

@yield('default')







<footer>
    <p>&copy; <?php echo date("Y"); ?> Swimming Club. All rights reserved.</p>
</footer>

</body>
</html>