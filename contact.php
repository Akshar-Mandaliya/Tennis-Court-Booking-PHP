<!-- HTML CONNECTION -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Contact</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .iframe-container {
            width: 100%;
            height: 300px;
            overflow: hidden;
            padding-top: 56.25%;
            position: relative;
            margin-bottom: 30px;
        }
        .iframe-container iframe {
            border: 0;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url("img/Bg4.webp");
            background-size: cover;
        }
        .contact .content {
            max-width: 800px;
            text-align: center;
        }
        .contact .content h2 {
            font-size: 36px;
            font-weight: 500;
            color: #fff;
        }
        .contact .content p {
            font-weight: 300;
            color: #fff;
        }
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .container .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .container .contactInfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }
        .container .contactInfo .box .icon {
            min-width: 60px;
            height: 60px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 22px;
        }
        .container .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            flex-direction: column;
            font-weight: 300;
        }
        .container .contactInfo .box .text h3 {
            font-weight: 500;
            color: #00bcd4;
        }
        .contactForm {
            width: 40%;
            padding: 40px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .contactForm h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .contactForm .inputBox {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }
        .contactForm .inputBox input,
        .contactForm .inputBox textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            border: 1px solid #ccc;
            outline: none;
            resize: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .contactForm .inputBox input:focus,
        .contactForm .inputBox textarea:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }
        .contactForm .inputBox input[type="submit"] {
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .contactForm .inputBox input[type="submit"]:hover {
            background: #0097a7;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            color: #111;
            background-color: #f0c14b;
            border: 1px solid #a88734;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }
        .back-button:hover {
            background-color: #ddb347;
        }
        .inputBox .icon {
            position: absolute;
            top: 60%;
            left: 10px;
            transform: translateY(-50%);
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p style="margin-top: 10px;font-size:19px;">For any inquiries regarding our tennis court booking, please reach out to us through the form below or contact us directly.</p>
        </div>

        <!-- Back Button -->
      

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Bahuchar Hotel, Surendranagar</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>982-405-8583</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-reply" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Mandaliyaakshar@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST">
                    <h2 style="justify-content: center;text-align: center;">Send Message</h2>
                    <div class="inputBox">
                   
                        <input type="text" name="contact_name" required="required" placeholder="Full Name" style="" >
                    </div>
                    <div class="inputBox">
                        <input type="email" name="contact_email" required="required" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="contact_message" placeholder="Type Your Message ..."></textarea>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="Submit" value="Send" required="required">
                    </div>
                    <button class="btn btn-primary w-100 mt-4" style="background-color: #00bcd4; border-color: #00bcd4; height: 45px;" onclick="window.location.href='index.php'">Back To Home</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
    <!-- PHP CONNECTON -->
<?php
include ("Connection.php");
if (isset($_POST["Submit"])) {
    $contact_name = $_POST["contact_name"];
    $contact_email = $_POST["contact_email"];
    $contact_message = $_POST["contact_message"];
    $insert = "INSERT INTO contact(contact_name , contact_email , contact_message) VALUES ('$contact_name' , '$contact_email' , '$contact_message')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Contact Added Successfully ....'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Contact Not Added ....'); window.location.href='index.php';</script>";
    }
}
?>
