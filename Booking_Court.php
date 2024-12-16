<?php
include ("Connection.php");
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
    <title>Booking Court</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            padding: 2px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            
        }

        .col-md-12,
        .col-md-6 {
            padding: 10px 0;
        }

        .col-md-6 {
            width: 48%;
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            margin-left:45px;
        }

        input[type="number"],
        input[type="date"],
        input[type="time"],
        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left:45px;
            box-sizing: border-box;
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
        }

        input[type="number"]:nth-of-type(odd),
        input[type="date"]:nth-of-type(odd),
        input[type="time"]:nth-of-type(odd),
        input[type="text"]:nth-of-type(odd) {
            background-color: white;
        }

        input[type="number"]:nth-of-type(even),
        input[type="date"]:nth-of-type(even),
        input[type="time"]:nth-of-type(even),
        input[type="text"]:nth-of-type(even) {
            background-color: #fff3e6;
        }

        
        .submit-button {
            height: 50px;
            background-color: #e68a00;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
            width:760px;
        }

        

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSuccessModal() {
            var modal = document.getElementById("successModal");
            modal.style.display = "block";
            var timer = document.getElementById("timer");
            var timeLeft = 10;
            var countdown = setInterval(function () {
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    window.location.href = "Payment.php";
                }
                timer.innerHTML = timeLeft;
                timeLeft -= 1;
            }, 1000);
        }
    </script>
</head>
<body>
    <div style="background-color:bisque;height:800px;border-color:#232f3e;">
        <form action="Packages.php" style="">
            <button class="btn btn-danger mt-4 btn-lg" style="margin-left: 20px;" >Back</button>
        </form>
        <div class="container" style="width:800px;border-radius:10px;margin-bottom:50px;margin-top:40px;">
            <h1 class="text-center text-danger"><u>Booking Form</u></h1>
            <form method="POST" class="mb-4 row">
                <?php
                $user_id = $_SESSION["user"]["user_id"];
                $court_id = $_SESSION['court_id'];
                ?>
                <div class="col-md-12">
                    <label>User Id</label>
                    <input type="number" name="user_id" value="<?php echo $user_id ?>" required readonly>
                </div>
                <div class="col-md-12">
                    <label>Court Id</label>
                    <input type="number" name="court_id" value="<?php echo $court_id ?>" required readonly>
                </div>
                <div class="col-md-12">
                    <label>Booking Date</label>
                    <input type="date" name="booking_date" required>
                </div>
                <div class="col-md-6">
                    <label>Start Time</label>
                    <input type="time" name="start_time" required>
                </div>
                <div class="col-md-6">
                    <label style="margin-left:1px;">End Time</label>
                    <input type="time" name="end_time" style="margin-left:1px;" required>
                </div>
                <div class="col-md-12">
                    <label>Payment Details</label>
                    <input type="text" name="booking_payment_details" required>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn text-danger btn-lg" style="margin-left:42px;width:710px;background-color:bisque;justify-content: center;" name="submit">Book Now</button>
                </div>
            </form>
        </div>

        <!-- The Modal -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <h2>Booking Successful!</h2>
                <p>Redirecting in <span id="timer">10</span> seconds...</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include ("Connection.php");

if (isset($_POST["submit"])) {
    $user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);
    $court_id = mysqli_real_escape_string($conn, $_POST["court_id"]);
    $booking_date = mysqli_real_escape_string($conn, $_POST["booking_date"]);
    $start_time = mysqli_real_escape_string($conn, $_POST["start_time"]);
    $end_time = mysqli_real_escape_string($conn, $_POST["end_time"]);
    $booking_payment_details = mysqli_real_escape_string($conn, $_POST["booking_payment_details"]);

    // Check if the court is already booked for the given time
    $check_query = "SELECT * FROM bookings WHERE court_id='$court_id' AND booking_date='$booking_date' AND 
                    ((start_time <= '$start_time' AND end_time > '$start_time') OR 
                     (start_time < '$end_time' AND end_time >= '$end_time') OR 
                     (start_time >= '$start_time' AND end_time <= '$end_time'))";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('No court available for the selected time.');</script>";
    } else {
        $insert = "INSERT INTO bookings (user_id, court_id, booking_date, start_time, end_time, booking_payment_details) 
                   VALUES ('$user_id', '$court_id', '$booking_date', '$start_time', '$end_time', '$booking_payment_details')";

        if (mysqli_query($conn, $insert)) {
            echo "<script>showSuccessModal();</script>";
        } else {
            echo "<script>alert('Booking Failed.');</script>";
        }
    }
}
?>