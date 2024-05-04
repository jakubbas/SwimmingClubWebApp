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
      <li><a href="#">Galas</a></li>
      <li><a href="#">Swimmers</a></li>
      <li><a href="#">Compare</a></li>
      <li><a href="#">Log In</a></li>
    </ul>
  </nav>

{{-- VIEW OUTPUT--}}
@yield('default')







<footer>
    <p>&copy; <?php echo date("Y"); ?> Swimming Club. All rights reserved.</p>
</footer>

</body>
</html>