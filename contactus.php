<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background-color: #208245;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .nav-list {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        .nav-list li {
            display: inline;
            margin-right: 20px;
        }

        .nav-list li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Contact Form */
        .contact-form {
            margin-top: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.php">Course</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Contact Us</h2>
        <form class="contact-form" action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>