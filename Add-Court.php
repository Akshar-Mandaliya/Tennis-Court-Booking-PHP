<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Product Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input, .form-group textarea, .form-group select {
            margin-bottom: 15px;
        }
        .btn-custom {
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f0c14b;
            border-color: #a88734 #9c7e31 #846a29;
            color: #111;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-custom:hover {
            background-color: #e2b33d;
            transform: scale(1.05);
        }
        .header__menu ul {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-around;
        }
        .header__menu ul li {
            display: inline;
            padding: 10px 15px;
        }
        .footer {
            background-color: #232f3e;
            color: #fff;
            padding: 40px 0;
        }

        .footer__about h1 {
            font-size: 100px;
        }

        .footer__about p {
            margin-top: 10px;
        }

        .footer__widget h6 {
            color: #f0c14b;
            margin-bottom: 20px;
        }

        .footer__widget ul {
            list-style: none;
            padding: 0;
        }

        .footer__widget ul li {
            margin-bottom: 10px;
        }

        .footer__widget ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer__widget ul li a:hover {
            text-decoration: underline;
        }

        .footer__newslatter p {
            margin-bottom: 20px;
        }

        .footer__newslatter form {
            display: flex;
        }

        .footer__newslatter input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 0px;
        }
        .footer__copyright__text {
            margin-top: 20px;
            margin-left: 3px;
        }
    </style>
</head>

<body>

 <div><?php include('Header1.php');  ?></div>
   
    <div class="form-container" style="background-color: aliceblue;margin-top: 150px;">
        <h3 class="text-center mt-3"><u>Add Court</u></h3>
        <form  method="POST">
            <div class="form-group">
                <label for="productId">Court ID:</label>
                <input type="text" name="product_id" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="productName">Court Name:</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="productPrice">Court Type:</label>
                <input type="text"  name="product_price" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="productDescription">Court Location:</label>
                <textarea name="product_description" class="form-control" rows="4"  required></textarea>
            </div>
            <div class="form-group">
                <label for="productImage">Court Image (URL):</label>
                <input type="text" name="product_image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="productCategory">Court Descripation:</label>
                <input type="text" name="product_category" class="form-control"  required>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="Submit" value="Submit" class="btn btn-success btn-custom">
            </div>
        </form>
    </div>
    <div class="mt-4"><?php include('Footer.php');  ?></div>
    
    

</body>
</html>
