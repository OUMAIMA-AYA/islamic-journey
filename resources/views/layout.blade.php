<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic courses</title>
    <style>
        /* Reset CSS */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}
body {
    font-family: 'Montserrat', sans-serif;
    background-color: #f9f9f9;
    color: #333; /* Main text color */
}
/* Header */
header {
    background-color: #f5f5dc; /* Beige */
    padding: 10px 0;
    text-align: center;
}
header h4 {
    color: #8b4513; /* Brown */
    font-size: 24px;
    font-weight: bold;
    margin-right: auto;
}
/* Navigation */
nav {
    background-color: #f5f5dc; /* Beige */
    text-align: center;
    padding: 15px 0; /* Adjusted padding */
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
nav ul li a {
    text-decoration: none;
    color: #8b4513; /* Brown */
    font-weight: bold;
    padding: 10px 20px; /* Adjusted padding */
    border-radius: 5px;
    transition: background-color 0.3s;
}
nav ul li a:hover {
    background-color: #d2b48c; /* Darker Beige */
}
/* Main content */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
/* Product */
.product {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}
.product h2 {
    font-size: 20px;
    margin-bottom: 10px;
}
.product p {
    font-size: 16px;
    margin-bottom: 5px;
}
.product p:last-child {
    margin-bottom: 0;
}
/* Contact Form */
form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #f5f5dc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form label {
    display: block;
    margin-bottom: 5px;
}
form input[type="text"],
form input[type="tel"],
form input[type="email"],
form input[type="date"]  {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 16px;
    box-sizing: border-box;
}
form input[type="submit"],
 input[type="button"] {
    background-color: #8b4513; /* Brown */
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: auto; /* Push the footer to the bottom of the viewport */
}
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="/produit">Our Products</a></li>
            <li><a href="/our_courses">Our courses</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
@yield('content')

</body>
</html>
