<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginners Hub - About Us</title>
    <style>
        /* Reset default margin and padding */
        /* Reset default margin and padding */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            background-color: #d8e9df;
            color: #208245;
        }
        
        header {
            background-color: #208245;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
        }
        
        .logo img {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }
        
        .nav-list {
            list-style: none;
            display: flex;
        }
        
        .nav-list li {
            margin-right: 20px;
        }
        
        .nav-list li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        
        .nav-list li a:hover {
            color: #ffd700;
        }
        
        main {
            padding: 20px;
        }
        
        .about-us {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .about-us h2 {
            margin-bottom: 20px;
            font-family: 'Merriweather', serif;
            font-size: 2rem;
            color: #333;
        }
        
        .about-us p {
            margin-bottom: 20px;
            font-size: 1rem;
            color: #666;
        }
        
        .about-team {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }
        
        .about-team h3 {
            margin-bottom: 10px;
            font-family: 'Merriweather', serif;
            font-size: 1.5rem;
            color: #333;
        }
        
        .about-team p {
            margin-bottom: 0;
            font-size: 1rem;
            color: #666;
        }
        
        footer {
            background-color: #208245;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        
        footer p {
            margin: 0;
        }
        /* Media Queries for responsiveness (example for smaller screens) */
    </style>
</head>

<body>
    <header>
        <a href="index.html" class="logo">
            <img src="images/network.png" alt="">
            <h2>Beginners Hub</h2>
        </a>
        <nav class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.php">Course</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contactus.php">Contact us</a></li>
        </nav>
    </header>

    <main>
        <section class="about-us">
            <h2>About Us</h2>
            <p>BeginnersHub is a platform designed to help aspiring programmers take their first steps into the exciting world of web development. We offer a comprehensive range of courses, all delivered in a clear, concise, and easy-to-understand manner.
                Whether you're a complete beginner or have some prior coding experience, we have something for everyone.</p>
            <div class="about-team">
                <h3>Our Dedicated Team</h3>
                <p>Our team consists of passionate and experienced developers who are committed to providing you with the best possible learning experience. We're constantly developing new courses and updating existing ones to ensure that you're always learning
                    the latest technologies.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; BeginnersHub 2024</p>
    </footer>
</body>

</html>