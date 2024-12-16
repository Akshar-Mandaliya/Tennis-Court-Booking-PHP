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
    <title>Review Page</title>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }
        .btn-custom {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f0c14b;
            border: none;
            color: #111;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #e2b33d;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 450px;
            transition: transform 0.3s;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            display: none;
            background-color: #FF9900;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #back-to-top:hover {
            background-color: #e58f00;
        }
    </style>
</head>
<body>
    <div><?php include ('Header.php'); ?></div>
    <div class="container" style="margin-top : 190px;">
        <form method="POST" action="">
            <div class="form-group">
                <label for="review_id">Enter Review ID</label>
                <input type="text" id="review_id" name="review_id" required>
                <button type="submit" class="btn-custom" name="view_review">View Review</button>
            </div>
        </form>
    </div>
    <div class="card-container">
        <?php
        include ('Connection.php');

        if(isset($_POST["view_review"])) {
            $review_id = $_POST["review_id"];
            $sql = "SELECT * FROM reviews WHERE review_id = '$review_id'";
        } else {
            $sql = "SELECT * FROM reviews";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h2 class="card-title text-primary">Review Id: ' . htmlspecialchars($row["review_id"]) . '</h2>';
                echo '<h2 class="card-title text-danger">User Id: ' . htmlspecialchars($row["user_id"]) . '</h2>';
                echo '<h2 class="card-title text-warning">User Name: ' . htmlspecialchars($row["user_name"]) . '</h2>';
                echo '<h2 class="card-title text-success">User Email: ' . htmlspecialchars($row["user_email"]) . '</h2>';
                echo '<h2 class="card-title text-secondary">User Password: ' . htmlspecialchars($row["user_password"]) . '</h2>';
                echo '<h2 class="card-title text-info">Rating: ' . htmlspecialchars($row["rating"]) . '</h2>';
                echo '<h2 class="card-title text-dark">Review Message: ' . htmlspecialchars($row["review_message"]) . '</h2>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<div class='container'>No results found</div>";
        }

        $conn->close();
        ?>
    </div>

    <button id="back-to-top" onclick="scrollToTop()"><img src="img/BackToTop.png" style="width: 30px; height: 30px;"></button>

    <script>
        window.onscroll = function () {
            var backToTopButton = document.getElementById("back-to-top");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>
