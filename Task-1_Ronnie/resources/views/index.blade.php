<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TechNest | Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        header {
            background: #222;
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            color: #ffcc00;
        }

        .hero {
            height: 500px;
            background: linear-gradient(
                rgba(0,0,0,0.5),
                rgba(0,0,0,0.5)
            ), url('/images/banner.jpg');

            background-size: cover;
            background-position: center;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero h1 {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .btn {
            background: #ffcc00;
            color: #222;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn:hover {
            background: #e6b800;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">TechNest</div>

        <nav>
            <a href="{{ route('index') }}">Landing Page</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to My Business!</h1>

        <p>
            Your trusted partner for quality products
            and excellent services.
        </p>

        <a href="products" class="btn">Explore Now</a>
    </section>

    <section style="text-align:center; padding:50px 20px;">
        <h2>Who We Are</h2>

        <p style="margin-top:15px;">
            We are committed to providing quality products
            and services to meet your needs.
            Our goal is to give every customer the best experience.
        </p>
    </section>

    <footer>
        <p>&copy; 2026 My Business. All Rights Reserved.</p>
    </footer>

</body>
</html>
