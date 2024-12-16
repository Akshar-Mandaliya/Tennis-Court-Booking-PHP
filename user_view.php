<?php
include ("connection.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Delete user if 'uid' is set
if (isset($_POST["uid"])) {
    $user = intval($_POST["uid"]);
    $delete = $conn->prepare("DELETE FROM users WHERE user_id = ?");
    $delete->bind_param("i", $user);
    if ($delete->execute()) {
        echo "<script>alert('User deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting user');</script>";
    }
    $delete->close();
    header("Location: user_view.php"); // Redirect to avoid form re-submission
    exit();
}

// Fetch users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tennis Court Booking | Review View</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        body {
            background-color: #232f3e;
            /* Amazon-like background color */
            color: #333;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .table-container {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            background-color: aliceblue;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 1rem;
            vertical-align: middle;
            border: 1px solid red;
            text-align: center;
            padding: 20px;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid red;
            border-top: 2px solid red;
            background-color: white;
            color: #333;
        }

        .table tbody tr td:last-child form input[type="submit"] {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .table tbody tr td:last-child form input[type="submit"]:hover {
            background-color: #c82333;
        }

        .table tbody tr td {
            border: 1px solid red;
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
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <form action="add.php">
        <button class="btn btn-danger mt-4 btn-lg" style="margin-left: 10px;">Home</button>
    </form>

    <div class="container table-container table-responsive" style="margin-top: 30px;">
        <table class="table table-bordered mt-4 table-hover table-striped" style="margin-left: 4px;">
            <h2 class="text-center text-info"><u>USERS VIEW</u></h2>
            <thead>
                <tr>
                    <th>User-Id</th>
                    <th>User-Name</th>
                    <th>User-Email</th>
                    <th>User-Password</th>
                    <th>User-Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["user_id"] . "</td>
                                <td>" . $row["user_name"] . "</td>
                                <td>" . $row["user_email"] . "</td>
                                <td>" . $row["user_password"] . "</td>
                                <td>" . $row["user_gender"] . "</td>
                                <td>
                                <form action='user_view.php' method='POST' style='display:inline-block;'>
                                <input type='hidden' name='uid' value='" . $row['user_id'] . "'>
                                <input type='submit' value='Delete' class='btn btn-danger'>
                                </form>
                                </td>
                                </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
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
<?php
$conn->close();
?>
