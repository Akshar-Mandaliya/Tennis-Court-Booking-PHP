<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Payment</title>
    <style>
        body {
            font-family: 'Amazon Ember', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #232f3e;
            color: #333;
        }

        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #232f3e;
            border-bottom: 2px solid #e7e7e7;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #111;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #ff9900;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e68a00;
        }

        footer {
            background-color: #232f3e;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #e7e7e7;
        }

        .header {
            background-color: #232f3e;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            position: fixed;
            top: 0;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
            z-index: 1000;
        }
    </style>
</head>

<body>
<form action="Payment.php"><input type="submit" value="Back" class="btn btn-danger" style="margin-top: 15px;margin-left: 15px;"></form>
    <div class="container" style="margin-top: 90px;">
        <h1>Credit Card Payment</h1>
        <form method="POST">
            <?php 
            session_start();
            $court_id = $_SESSION['court_id']; ?>
            <div class="form-group">
                <label for="court-id"><b>Court Id</b></label>
                <input type="text" id="court-id" name="court_id" value="<?php echo $court_id ?>" required>
            </div>
            <div class="form-group">
                <label for="card-number"><b>Card Number</b></label>
                <input type="text" id="card-number" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date"><b>Expiry Date</b></label>
                <input type="date" id="expiry-date" name="expiry_date" required>
            </div>
            <div class="form-group">
                <label for="cvv"><b>CVV</b></label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn" name="Submit">Pay Now</button>
        </form>
    </div>   
</body>
</html>

<?php
if(isset($_POST["Submit"])){
    echo "<script>alert('Payment Successfull ....'); window.location.href='index.php'; </script>";
}



?>