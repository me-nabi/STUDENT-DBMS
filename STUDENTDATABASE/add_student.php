<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "college project";
$data = new mysqli($host, $user, $password, $db);

if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM user WHERE username='$username'";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);

    if ($row_count > 0) {
        echo "<script type='text/javascript'>
                alert('Username already exists. Try another one.');
              </script>";
    } else {
        // Prepare and bind
        $stmt = $data->prepare("INSERT INTO user (username, email, phone, usertype, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $user_email, $user_phone, $usertype, $user_password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script type='text/javascript'>
                    alert('Data uploaded successfully');
                  </script>";
        } else {
            echo "Upload Failed: " . $stmt->error;
        }

        $stmt->close();
    }
}

$data->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <style>
    /* Add some basic styling to the form */
    form {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
      background: linear-gradient(to bottom, #87CEEB 0%, #4682B4 100%);
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      transform: translateY(0px);
      transition: transform 0.5s ease-in-out;
    }

    form:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
    }

    /* Style the form labels and inputs */
    label {
      display: block;
      margin-bottom: 10px;
      color: #fff;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      height: 40px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    /* Style the submit button */
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      background: linear-gradient(to bottom, #03A9F4 0%, #0078D7 100%);
    }

    input[type="submit"]:hover {
      background: linear-gradient(to bottom, #0078D7 0%, #03A9F4 100%);
    }
  </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<header class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
            <div class="navbar-right">
                <a href="logout.php" class="btn btn-primary navbar-btn">Logout</a>
            </div>
        </div>
    </nav>
</header>

<aside>
    <ul>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="add_student.php">Add Student</a></li>
        <li><a href="#">View Student</a></li>
        <li><a href="#">Add Teacher</a></li>
        <li><a href="#">View Teacher</a></li>
        <li><a href="#">Add Courses</a></li>
        <li><a href="#">View Courses</a></li>
    </ul>
</aside>

<div class="content">
    <center>
    <h1>Add students</h1>

    <div>
        <form action="#" method="POST">
            <div>
                <label for="">Username</label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>

            <div>
                <label for="">Phone</label>
                <input type="text" name="phone">
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password">
            </div>

            <div>
                <input type="submit" name="add_student" value="Add Student">
            </div>
        </form>
    </div>
    </center>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
