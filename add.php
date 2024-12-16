<!-- Php Code -->
<?php 
include("connection.php"); 
session_start(); 
if (!isset($_SESSION['admin'])) { 
    header("Location: login.php"); 
    exit(); 
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $court_name = $_POST['court_name']; 
    $court_type = $_POST['court_type']; 
    $court_location = $_POST['court_location']; 
    $sql = $conn->prepare("INSERT INTO courts (court_name, court_type, court_location) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $court_name, $court_type, $court_location);
    if ($sql->execute()) {
        echo "Court added successfully.";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
}
$conn->close();
?>
<!-- Html Code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <style>
        body {
            background-color: silver;
            color: #333;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
</style>
</head>
<body>

<?php include("Header1.php"); ?>
<img src="img/Admin2.jpg" style="margin-top:150px;margin-left: 200px;margin-bottom: 50px;" height="400px" width="1100px">
</body>
</html>
