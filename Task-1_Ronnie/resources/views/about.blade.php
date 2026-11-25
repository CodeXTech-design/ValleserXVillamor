<!DOCTYPE html>
<html>
<head>
    <title>About Us - TechNest</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: lightblue;
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
            padding: 30px;
            text-align: center;
        }

        img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        h2 {
            color: #2874a6;
        }

        p {
            line-height: 1.6;
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
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>

    <div class="container">

        <h1>About Our Company</h1>

        <img src="{{ asset("img/technest.png")}}" alt="TechNest Gadgets">

        <h2>Company Background</h2>
        <p>
            TechNest is a gadgets and electronics business
            that offers quality and affordable technology
            products. We provide gadgets and accessories
            to help make everyday life easier and more convenient.
        </p>

        <h2>Our Vision</h2>
        <p>
            To become a trusted and leading electronics
            store that provides innovative technology
            products to everyone.
        </p>

        <h2>Our Mission</h2>
        <p>
            To provide high-quality, affordable, and reliable
            gadgets and electronic products while delivering
            excellent customer service.
        </p>

        <h2>Our Goals and Objectives</h2>
        <p>
            1. Offer affordable and quality gadgets.<br>
            2. Provide excellent customer service.<br>
            3. Keep customers satisfied.<br>
            4. Offer the latest technology products.<br>
            5. Grow and expand our business.
        </p>

    </div>

    <footer>
        <p>&copy; 2026 TechNest. All Rights Reserved.</p>
    </footer>

</body>
</html>
