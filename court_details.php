<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Court Details</title>
    <style>
        body {
            background-color: bisque; /* Amazon background color */
            color: #111;
            font-family: 'Amazon Ember', Arial, sans-serif;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .image-container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .image-container img {
            width: 100%;
            max-width: 1200px;
            height: auto;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .details-container {
            width: 100%;
        }

        .details-container h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .details-container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details-container th,
        .details-container td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .details-container tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .details-container tr:hover {
            background-color: #f1f1f1;
        }

        .details-container form {
            width: 100%;
            display: flex;
            
            margin-bottom: 20px;
        }

        .details-container button {
            background-color: black; /* Amazon button color */
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .details-container button:hover {
            background-color: black;
            cursor: pointer;
        }
        .court-button a {
            height: 50px;
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <a href="packages.php" class="btn btn-danger mt-4 mb-4 btn-lg">Back</a>

    <div class="container">
        <?php
        include('Connection.php');
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $court_id = $_POST['court_id'];
            $_SESSION['court_id'] = $court_id;
            $sql = "SELECT * FROM court WHERE court_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $court_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '<div class="image-container">';
                echo "<img src='" . htmlspecialchars($row["court_image"]) . "' alt='Court Image' class='border border-5 border-danger img-thumbnail'>";
                echo '</div>';
                echo '<div class="details-container">';
                echo '<table>';
                echo '<tr><th>Court ID</th><td>' . htmlspecialchars($row["court_id"]) . '</td></tr>';
                echo '<tr><th>Court Name</th><td>' . htmlspecialchars($row["court_name"]) . '</td></tr>';
                echo '<tr><th>Court Type</th><td>' . htmlspecialchars($row["court_type"]) . '</td></tr>';
                echo '<tr><th>Court Location</th><td>' . htmlspecialchars($row["court_location"]) . '</td></tr>';
                echo '<tr><th>Court Prize</th><td>' . htmlspecialchars($row["court_prize"]) . '</td></tr>';
                echo '<tr><th>Court Description</th><td>' . htmlspecialchars($row["court_descripation"]) . '</td></tr>';
                echo '</table>';
                echo '<form action="Booking_Court.php" method="POST">';
                echo '<button class="btn text-danger w-100 btn-lg" style="width:120px;background-color:bisque;" name="Submit">Book Now</button>';
                echo '</form>';
                echo '<form action="review.php" method="POST">';
                echo '<button class="btn text-danger w-100" style="width:120px;background-color:bisque;" name="Submit">Review</button>';
                echo '</form>';
                echo '</div>';
            } else {
                echo "Court not found.";
            }
        }

        $conn->close();
        ?>
    </div>
</body>

</html>
