<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <title>Register</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: url("img/Back1.jpg");
    }

    .register-container {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 450px;
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .inputBox {
      position: relative;
      margin-bottom: 20px;
    }

    .inputBox input {
      width: 100%;
      padding: 10px 35px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: all 0.3s ease;
      font-size: 16px;
    }

    .inputBox input:focus {
      border-color: #00bcd4;
      box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
    }

    .inputBox input:hover {
      border-color: #00bcd4;
    }

    

    .inputBox input[type="submit"] {
      background: #00bcd4;
      color: #fff;
      border: none;
      cursor: pointer;
      padding: 12px 20px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .inputBox input[type="submit"]:hover {
      background: #0097a7;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      margin-bottom: 10px;
      display: none;
    }

    /* Back Button Styling */
    .back-button {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #f0c14b;
      color: #111;
      border: 1px solid #a88734;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .back-button:hover {
      background-color: #e7b331;
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>

<body>
  <div class="register-container">
    <h2>Add Court</h2>
    <form method="POST" style="height:450px;">
      <div class="inputBox mt-4">
        <input type="text" name="court_name" placeholder="Court Name" style="text-align: left;" required>
      </div>
      <div class="inputBox">
        <input type="text" name="court_type" placeholder="Court Type" required>
      </div>
      <div class="inputBox">
        <input type="text" name="court_location" placeholder="Court Location" required>
      </div>
      <div class="inputBox">
        <input type="text" name="court_image" placeholder="Court Image" required>
      </div>
      <div class="inputBox">
        <input type="text" id="username" name="court_prize" placeholder="Court Prize" required>
      </div>
      <div class="inputBox">
        <input type="text" name="court_descripation" placeholder="Court Descripation" required>
      </div>
      <div class="inputBox">
        <input type="submit" value="Add Court" name="submit" class="mt-2">
      </div>
    </form>
    <button class="btn btn-primary w-100 mt-4" style="background-color: #00bcd4; border-color: #00bcd4; height: 45px;" onclick="window.location.href='View-Court.php'">Back</button>
    </div>
</body>

</html>
<?php
include("connection.php");
if (isset($_POST["submit"])) {
  $court_name = $_POST["court_name"];
  $court_type = $_POST["court_type"];
  $court_location = $_POST["court_location"];
  $court_image = $_POST["court_image"];
  $court_prize = $_POST["court_prize"];
  $court_descripation = $_POST["court_descripation"];
  $insert = "INSERT INTO court(court_name, court_type, court_location, court_image, court_prize , court_descripation) VALUES ('$court_name', '$court_type', '$court_location', '$court_image', $court_prize ,  '$court_descripation')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('Court Added Successfully ....'); window.location.href='View-Court.php';</script>";
  } else {
    echo "Not Inserted";
  }
}
?>
