<?php
include("connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$court_id = isset($_GET['court_id']) ? intval($_GET['court_id']) : 0;

if ($court_id > 0) {
    $query = "SELECT * FROM reviews WHERE court_id = $court_id";
    $result = mysqli_query($conn, $query);
    $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $reviews = [];
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
    <title>Show Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #232f3e;
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

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .btn-back {
            margin: 20px 0;
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-back:hover {
            background-color: #e68a00;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <a href="review.php" class="btn btn-danger mt-4 btn-lg" style="margin-left: 20px;">Back</a>
    <div class="container">
        <h2 class="text-danger text-center"><u>Reviews for Court ID: <?php echo $court_id; ?></u></h2>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                       
                        <th>User Name</th>
                        <th>User Email</th>
                        
                        <th>Rating</th>
                        <th>Review Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($reviews)) : ?>
                        <?php foreach ($reviews as $review) : ?>
                            <tr>
                                
                                <td><?php echo $review['user_name']; ?></td>
                                <td><?php echo $review['user_email']?></td>
                                <td><?php echo $review['rating']; ?></td>
                                <td><?php echo $review['review_message']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">No reviews found for this court.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
