<?php
include ("connection.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["cid"])) {
    $user = intval($_POST["cid"]);
    $delete = $conn->prepare("DELETE FROM court WHERE court_id = ?");
    $delete->bind_param("i", $user);
    if ($delete->execute()) {
        echo "<script>alert('Court deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting court');</script>";
    }
    $delete->close();
    header("Location: View-Court.php"); // Redirect to avoid form re-submission
    exit();
}

$results_per_page = 5; // Number of entries to show in a page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = (int) $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $results_per_page;

$sql = "SELECT * FROM court LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);

$total_sql = "SELECT COUNT(*) FROM court";
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_row();
$total_records = $total_row[0];
$total_pages = ceil($total_records / $results_per_page);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tennis Court Booking | Court View</title>
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
           
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
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

        .pagination {
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        .pagination a {
            color: #232f3e;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination a.active {
            background-color: #232f3e;
            color: white;
            border: 1px solid #232f3e;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <a href="add.php" class="btn btn-danger mt-4 btn-lg" style="margin-left: 20px;">Home</a>
    <div class="container table-container table-responsive" style="margin-top: 30px;">
        <table class="table table-bordered mt-4 table-hover table-striped" style="margin-left: 4px;">
            <a href="Akshar1.php"><button class="btn btn-danger" style="font-size : 19px;margin-left: 500px;">Add Court</button></a>
            <!--<img src="img/Courts1.png" class="mb-4 mt-4" style="margin-left: 10px; width: 800px;">
            -->
            <thead>
                <tr>
                    <th>C.Id</th>
                    <th>C.Name</th>
                    <th>C.Type</th>
                    <th>C.Location</th>
                    <th>C.Image</th>
                    <th>C.Prize</th>
                    <th>C.Description</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_id"]) . "</td>
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_name"]) . "</td>
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_type"]) . "</td>
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_location"]) . "</td>
                             <td style='margin-top : 100px;'><img src='" . htmlspecialchars($row["court_image"]) . "' alt='Court Image' width='100'></td>
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_prize"]). "</td> 
                             <td style='margin-top : 100px;'>" . htmlspecialchars($row["court_descripation"]) . "</td>
                             <td>
                                <form action='View-Court.php' method='POST' style='display:inline-block;'>
                                <input type='hidden' name='cid' value='" . $row['court_id'] . "'>
                                <input type='submit' value='Delete' class='btn btn-danger' >
                                </form>
                            </td>
                            <td>
                            <form action='update-court.php' method='POST' style='display:inline-block;'>
                                <input type='hidden' name='cid' value='" . $row['court_id'] . "'>
                                 <input type='submit' value='Update' class='btn btn-success'>
                            </form>
                            </td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No courts found</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='View-Court.php?page=" . $i . "'";
                if ($i == $page) {
                    echo " class='active'";
                }
                echo ">" . $i . "</a> ";
            }
            ?>
        </div>
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
