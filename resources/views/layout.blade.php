<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <style>
          body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #f5f5dc; /* Beige */
            padding: 10px;
            display: flex;
            align-items: center;
        }
        .logo {
            margin-right: auto; /* Pushes the logo to the left */
            margin-left: 20px; /* Adds a bit of space to the left of the logo */
        }
        .logo img {
            max-width: 60px; /* Limit the width of the logo */
            height: auto; /* Maintain aspect ratio */
        }
        nav {
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
        .menu-icon {
            cursor: pointer;
            margin-left: 20px; /* Adjust the margin to move the icon to the left */
        }
        .additional-links {
            display: none;
        }
        .additional-links.show {
            display: block;
        }
        .additional-nav {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }
        .additional-nav li {
            margin-bottom: 10px;
        }
        .additional-nav li a {
            text-decoration: none;
            color: #8b4513; /* Brown */
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s
        }
        .additional-nav li a:hover {
            background-color: #d2b48c; /* Darker Beige */
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
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form label {
    font-family: Georgia, 'Times New Roman', Times, serif;
    display: block;
    margin-bottom: 5px;
}
form input[type="text"],
form input[type="tel"],
form input[type="number"],
form input[type="email"],
form input[type="password"],
select,
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
    width:60%;
    padding: 14px 15px;
    margin-left: 85px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
}
    </style>
</head>
<body>
<header>
<div class="logo">
         <a href='/home'><img src="https://i.pinimg.com/236x/a8/fb/17/a8fb17f5130c797963bf88cdd91c5d1e.jpg" style="border-radius: 100%;" alt="Logo"></a>
    </div> <nav>
        <ul class="layout-nav">
            <li><a href="/about">About Us</a></li>
            <li><a href="/produit">Our Products</a></li>
            <li><a href="/our_courses">Our courses</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    
</div>

    </nav>
    <div class="menu-icon" onclick="toggleAdditionalLinks()">
    <i class="fas fa-bars"></i>
    <div class="additional-links" id="additionalLinks">
        <ul class="additional-nav">
            <li><a href="/infozakah">Calculating your zakat</a></li>
        </ul>
    </div>
</header>

<script>
    function toggleAdditionalLinks() {
        var additionalLinks = document.getElementById('additionalLinks');
        additionalLinks.classList.toggle('show');
        console.log('Additional links toggled');
    }
</script>
@yield('content')
</body>
</html>
