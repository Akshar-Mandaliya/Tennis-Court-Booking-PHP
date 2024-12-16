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
    background: url("img/Bg3.jpg");
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
.inputBox input,
.inputBox select {
    width: 100%;
    padding: 10px 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-size: 16px;
}
.inputBox input:focus,
.inputBox select:focus {
    border-color: #00bcd4;
    box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
}
.inputBox input:hover,
.inputBox select:hover {
    border-color: #00bcd4;
}
.inputBox .icon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #666;
    font-size: 18px;
}
.inputBox input[type="submit"],
.inputBox button {
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 12px 20px;
    border-radius: 5px;
    transition: background 0.3s ease;
}
.inputBox input[type="submit"]:hover,
.inputBox button:hover {
    background: #0097a7;
}
.error {
    color: red;
    font-size: 14px;
    margin-top: 10px;
    margin-bottom: 10px;
    display: none;
}
</style>
<script>
function validateForm() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const emailError = document.getElementById("email-error");
    const passwordError = document.getElementById("password-error");
    let valid = true;
    
    if (!email.includes("@") || !email.endsWith(".com")) {
        emailError.style.display = "block";
        valid = false;
    } else {
        emailError.style.display = "none";
    }
    
    if (password.length < 8) {
        passwordError.style.display = "block";
        valid = false;
    } else {
        passwordError.style.display = "none";
    }
    
    return valid;
}
</script>
</head>
<body>
<div class="register-container">
    <h2>Register</h2>
    <form onsubmit="return validateForm()" method="POST" style="height: 370px;">
        <div class="inputBox">
            <i class="fa fa-user icon"></i>
            <input type="text" id="username" name="user_name" placeholder="Username" required>
        </div>
        <div class="inputBox">
            <i class="fa fa-envelope icon"></i>
            <input type="email" id="email" name="user_email" placeholder="Email" required>
            <div id="email-error" class="error">Please enter a valid email address.</div>
        </div>
        <div class="inputBox">
            <i class="fa fa-lock icon"></i>
            <input type="password" id="password" name="user_password" placeholder="Password" required>
            <div id="password-error" class="error">Password must be at least 8 characters long.</div>
        </div>
        <div class="inputBox">
            <i class="fa fa-venus-mars icon"></i>
            <select id="gender" name="user_gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="inputBox">
            <input type="submit" value="Register" name="submit" class="mt-2">
        </div>
        <!-- Additional Button -->
        <div class="inputBox">
            <button type="button" class="w-100" onclick="window.location.href='index.php'">Back To Home</button>
        </div>
        
    </form>
</div>
</body>
</html>

<?php
include ("Connection.php");
if (isset($_POST["submit"])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_gender = $_POST['user_gender'];
    $insert = "INSERT INTO users (user_name,user_email,user_password,user_gender) VALUES ('$user_name', '$user_email', '$user_password', '$user_gender')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('User Registered Successfully.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('User Registration Failed.'); window.location.href='index.php';</script>";
    }
}
?>
