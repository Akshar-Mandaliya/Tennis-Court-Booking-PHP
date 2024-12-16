<?php
include("connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Review Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: bisque;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        textarea:focus {
            outline: none;
        }

        

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            
            font-size: 19px;
        }

        select:focus {
            border-color: #007bff;
            outline: none;
        }

        

        .submit-button {
            width: 100%;
            max-width: 860px;
            height: 50px;
            background-color: bisque;
            color: red;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;

        }


        .form-error {
            color: red;
            margin-top: 5px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="Packages.php"><button class="btn btn-danger mt-4 btn-lg" style="margin-left : 20px;">Back</button>
    </form>
    <div class="container">
        <h1 class="text-danger"><u>Add Your Review</u></h1>
        <form method="POST" action="">
            <?php
            $user_id = $_SESSION["user"]["user_id"];
            $user_name = $_SESSION["user"]["user_name"];
            $user_email = $_SESSION["user"]["user_email"];
            $user_password = $_SESSION["user"]["user_password"];
            $court_id = $_SESSION['court_id'];
            ?>
            <div class="form-group">
                <label for="court_id">Court Id</label>
                <input type="number" name="court_id" value="<?php echo $court_id ?>" required>
            </div>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="number" name="user_id" value="<?php echo $user_id ?>" required>
            </div>
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" id="name" name="user_name" value="<?php echo $user_name ?>" required>
            </div>
            <div class="form-group">
                <label for="email">User Email</label>
                <input type="email" id="email" name="user_email" value="<?php echo $user_email ?>" required>
            </div>
            <div class="form-group">
                <label for="password">User Password</label>
                <input type="password" id="password" name="user_password" value="<?php echo $user_password ?>" required>
            </div>
            <div class="form-group mt-4">
                <label for="rating">Rating</label>
                <select id="rating" name="rating" required>
                    <option value="" disabled selected>Select a rating</option>
                    <option value="1">1 - Very Poor</option>
                    <option value="2">2 - Poor</option>
                    <option value="3">3 - Average</option>
                    <option value="4">4 - Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="review_message">Review Message</label>
                <textarea id="review_message" name="review_message" required></textarea>
            </div>
            <button type="submit" class="submit-button" name="submit" style="font-size: 20px;">Submit Review</button>
        </form>
        <form method="GET" action="Show_Review.php">
        <input type="hidden" name="court_id" value="<?php echo $_SESSION['court_id']; ?>">
        <button type="submit" class="submit-button" style="font-size: 20px;">Show Review</button>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            $court_id = $_POST["court_id"];
            $user_id = $_POST["user_id"];
            $user_name = $_POST["user_name"];
            $user_email = $_POST["user_email"];
            $user_password = $_POST["user_password"];
            $rating = $_POST["rating"];
            $review_message = $_POST["review_message"];
            $insert = "INSERT INTO reviews (court_id, user_id, user_name, user_email, user_password, rating, review_message) VALUES ('$court_id', '$user_id', '$user_name', '$user_email', '$user_password', '$rating', '$review_message')";
            if (mysqli_query($conn, $insert)) {
                echo "<script>alert('Review Added');</script>";
            } else {
                echo "<script>alert('Failed to Add Review');</script>";
            }
        }
        ?>
    </div>
</body>

</html>
