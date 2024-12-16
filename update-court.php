<?php
include("connection.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
if (isset($_POST["cid"])) {
    $court_id = intval($_POST["cid"]);
    $sql = "SELECT * FROM court WHERE court_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $court_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $court = $result->fetch_assoc();
    $stmt->close();
}

if (isset($_POST["update"])) {
    $court_id = intval($_POST["court_id"]);
    $court_name = $_POST["court_name"];
    $court_type = $_POST["court_type"];
    $court_location = $_POST["court_location"];
    $court_image=$_POST["court_image"];
    $court_description = $_POST["court_description"];
    
    $update = $conn->prepare("UPDATE court SET court_name=?, court_type=?, court_location=?, court_image=?, court_descripation=? WHERE court_id=?");
    $update->bind_param("sssssi", $court_name, $court_type, $court_location, $court_image, $court_description, $court_id);

    if ($update->execute()) {
        echo "<script>alert('Court updated successfully');</script>";
        header("Location: View-Court.php");
        exit();
    } else {
        echo "<script>alert('Error updating court');</script>";
    }

    $update->close();
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
    <title>Update Court</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #232f3e;
            margin: 0;
            padding: 0;
        }
        .form-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            background-color: #e6f7ff;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #FF9900;
            box-shadow: 0 0 5px rgba(255, 153, 0, 0.5);
            outline: none;
        }
        .form-group input:hover,
        .form-group textarea:hover{
            border-color: red;
            transform: scale(1.01);
        }
        .form-group button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<a href="View-Court.php" class="btn btn-danger mt-4 btn-lg" style="margin-left : 20px">Back</a>
<div class="form-container">
    <h2 class="text-center text-danger">Update Court</h2>
    <form action="update-court.php" method="POST">
        <input type="hidden" name="court_id" value="<?php echo htmlspecialchars($court['court_id']); ?>">
        <div class="form-group">
            <label for="court_name">Court Name</label>
            <input type="text" id="court_name" name="court_name" value="<?php echo htmlspecialchars($court['court_name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="court_type">Court Type</label>
            <input type="text" id="court_type" name="court_type" value="<?php echo htmlspecialchars($court['court_type']); ?>" required>
        </div>
        <div class="form-group">
            <label for="court_location">Court Location</label>
            <input type="text" id="court_location" name="court_location" value="<?php echo htmlspecialchars($court['court_location']); ?>" required>
        </div>
        <div class="form-group">
            <label for="court_image">Court Image</label>
            <input type="text" id="court_image" name="court_image" value="<?php echo htmlspecialchars($court['court_image']); ?>" required>
        </div>
        <div class="form-group">
            <label for="court_description">Court Description</label>
            <textarea id="court_description" name="court_description" required><?php echo htmlspecialchars($court['court_descripation']); ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="update" class="w-100">Update Court</button>
        </div>
    </form>
</div>
</body>
</html>
<?php
$conn->close();
?>
