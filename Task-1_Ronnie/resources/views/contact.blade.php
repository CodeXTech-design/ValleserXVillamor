<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - TechNest</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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

        input, textarea {
            width: 300px;
            padding: 10px;
            margin: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: lightblue;
            border: none;
            cursor: pointer;
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

        <h1>Contact Us</h1>
        <p>Feel free to contact us for any questions or inquiries.</p>

        <h2>Our Contact Information</h2>

        <p>Address: Punta, Caraga, Philippines</p>
        <p>Contact Number: 09123456456</p>
        <p>Email: technest@gmail.com</p>
        <p>Facebook: TechNest Official</p>
        <p>Instagram: @technest</p>

        <h2>Send Us a Message</h2>
    </div>

    <footer>
        <p>&copy; 2026 TechNest. All Rights Reserved.</p>
    </footer>

</body>
</html>
