<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/layout.css" rel="stylesheet">
    <title>Swimming Club</title>


</head>

<header>
    <h1>Welcome!</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Prices</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
<body>

{{-- VIEW OUTPUT--}}
@yield('default')







<footer>
    <p>&copy; <?php echo date("Y"); ?> Swimming Club. All rights reserved.</p>
</footer>

</body>
</html>