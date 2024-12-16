<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Login</title>
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
            background: url("img/bg2.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .login-container h2 {
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
        .inputBox .icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #666;
            font-size: 18px;
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
            margin-top: -10px;
            margin-bottom: 10px;
            display: none;
        }
        .inputBox button {
            width: 30%;
            padding: 12px 20px;
            background-color: #0097a7;
            border: 1px solid #ccc;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .inputBox button:hover {
            background-color: #0097a7;
            
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="Login-code.php" style="height: 250px;">
            <div class="inputBox mt-4">
                <i class="fa fa-user icon"></i>
                <input type="text" id="username" name="user_name" placeholder="Username" required>
            </div>
            <div class="inputBox">
                <i class="fa fa-lock icon"></i>
                <input type="password" id="password" name="user_password" placeholder="Password" required>
                <div id="error" class="error">Password must be at least 8 characters long.</div>
            </div>
            <div class="inputBox">
                <input type="submit" value="Login" class="mt-2">
            </div>
            <button class="btn btn-primary w-100" style="background-color: #00bcd4; border-color: #00bcd4; height: 45px;" onclick="window.location.href='index.php'">Back To Home</button>
        </form>
    </div>
</body>
</html>
