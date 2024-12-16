<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #232f3e; /* Amazon-like background color */
            color: #ffffff; /* White text color for better contrast */
        }

        .about-us {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
        }

        .about {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
            max-width: 1200px;
            background-color: #3a4553; /* Custom background color for the content */
            border-radius: 12px;
            padding: 40px;
        }

        .pic {
            width: 300px;
            height: auto;
            border-radius: 12px;
            margin-right: 40px;
        }

        .text {
            max-width: 600px;
        }

        .text h2 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .text h5 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        span {
            color: #febd69; /* Amazon-like accent color */
        }

        .text p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .data {
            margin-top: 30px;
        }

        .hire {
            font-size: 18px;
            background: #febd69; /* Amazon-like button color */
            color: #232f3e;
            text-decoration: none;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .hire:hover {
            background: #f90; /* Darker shade on hover */
        }
    </style>
</head>
<body>
<form action="index.php">
    <button class="btn btn-danger mt-4 btn-lg" style="margin-left: 20px;">Home</button> 
</form>    
<section class="about-us" style="margin-top: 10px;">
        <div class="about">
            <img src="logo1.png" class="pic" alt="About Us Image" style="margin-left: 70px;">
            <div class="text">
            <h2>About Us</h2>
                <h5><u>Tennis Court Booking</u></h5>
                <p style="text-align: justify;">Welcome to our tennis court booking website. We provide a seamless and efficient platform for booking tennis courts in your area. Our mission is to make tennis more accessible to everyone by offering easy-to-use booking services and detailed information about each court. Whether you're a seasoned player or a beginner, our website helps you find the perfect court to match your needs. Enjoy a hassle-free experience with our user-friendly interface and dedicated customer support. Join us in promoting an active and healthy lifestyle through the sport of tennis.</p>
                <div class="data">
                    <form action="contact.php">
                    <input type="submit" class="hire" value="Contact"></form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
