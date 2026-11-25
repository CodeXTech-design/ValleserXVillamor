<!DOCTYPE html>
<html>
<head>
    <title>Products - TechNest</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: lightblue;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        .product {
            margin: 20px;
            padding: 15px;
        }

        img {
            width: 200px;
            height: 150px;
        }

        h2 {
            color: #2874a6;
        }

        footer {
            background-color: lightblue;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

    <header>
        <h1>TechNest</h1>
        <p>Your World of Technology in One Place.</p>
    </header>

    <nav>
        <a href="{{ route('index') }}">Landing Page</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="container">

        <h1>Our Products</h1>
        <p>Check out our available gadgets and electronics.</p>

        <div class="product">
            <img src="{{ asset("img/phone.jpg")}}" alt="Smartphone">
            <h2>Smartphone</h2>
            <p>A modern smartphone with a good camera and fast performance.</p>
            <p>Price: ₱8,999</p>
        </div>

        <div class="product">
            <img src="{{ asset("img/laptop.jpg")}}" alt="Laptop">
            <h2>Laptop</h2>
            <p>A useful laptop for students, workers, and everyday activities.</p>
            <p>Price: ₱25,999</p>
        </div>

        <div class="product">
            <img src="{{ asset("img/headphone.jpg")}}" alt="Headphones">
            <h2>Headphones</h2>
            <p>Comfortable headphones with clear and quality sound.</p>
            <p>Price: ₱1,499</p>
        </div>

    </div>

    <footer>
        <p>&copy; 2026 TechNest. All Rights Reserved.</p>
    </footer>

</body>
</html>
