<?php
include("Connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Packages Page</title>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Amazon Ember', Arial, sans-serif;
            padding: 20px;
        }

        .search-bar {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #FF9900;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border: 2px solid #e2e2e2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-width: 300px;
            max-width: 400px;
            transition: transform 0.3s, border-color 0.3s;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #111;
        }

        .card-description {
            font-size: 1em;
            margin-bottom: 10px;
            color: #333;
        }

        .btn-custom {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #FF9900;
            border: none;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
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
            transition: background-color 0.3s;
        }
        #back-to-top:hover {
            background-color: #e58f00;
        }
    </style>
</head>

<body>
    <div><?php include('Header.php'); ?></div>
    <div class="search-bar" style="margin-top: 100px;">
        <form method="GET" action="">
            <input type="text" name="court_type" placeholder="Enter court type...">
            <button type="submit" style="margin-left:1px;">Search</button>
        </form>
    </div>
    <div class="card-container" style="margin-top: 1px;">
        <?php
        include('Connection.php');
        $court_type = isset($_GET['court_type']) ? $_GET['court_type'] : '';
        $court_type = $conn->real_escape_string($court_type);
        $sql = "SELECT * FROM court";
        if ($court_type != '') {
            $sql .= " WHERE court_type LIKE '%$court_type%'";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<form action="court_details.php" method="POST">';
                echo '<div class="card">';
                echo "<img src='" . htmlspecialchars($row["court_image"]) . "' alt='Court Image'>";
                echo '<div class="card-body">';
                echo '<h2 class="card-title">Court Id: ' . htmlspecialchars($row["court_id"]) . '</h2>';
                echo '<h2 class="card-title">Court Type: ' . htmlspecialchars($row["court_type"]) . '</h2>';
                //echo '<h2 class="card-title">Court Location: ' . htmlspecialchars($row["court_location"]) . '</h2>';
                echo '<input type="hidden" name="court_id" value="' . htmlspecialchars($row["court_id"]) . '">';
                echo '<input type="hidden" name="court_name" value="' . htmlspecialchars($row["court_name"]) . '">';
                echo '<input type="hidden" name="court_type" value="' . htmlspecialchars($row["court_type"]) . '">';
                echo '<input type="hidden" name="court_location" value="' . htmlspecialchars($row["court_location"]) . '">';
                echo '<button type="submit" class="btn-custom">View Details</button>';
                echo '</div>';
                echo '</div>';
                echo '</form>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    <div style="margin-top: 50px;"><?php include('Footer.php'); ?></div>
    <button id="back-to-top" onclick="scrollToTop()"><img src="img/BackToTop.png" style="width: 30px; height: 30px;"></button>
    <script>
        window.onscroll = function() {
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