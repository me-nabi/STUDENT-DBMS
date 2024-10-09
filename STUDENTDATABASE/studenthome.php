<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

/*elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
    <?php 

include 'student_css.php'

?>
   
</head>
<body>

<?php 

include 'student_sidebar.php'

?>


<div class="content">
    <h1>Welcome to the Student Dashboard</h1>
    <p>Here you can manage your courses and view your results.</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
