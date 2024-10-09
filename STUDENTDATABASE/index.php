<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">NABZUB_ed.tech</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">We Learn We Lead the World</label>
		<img class="main_img" src="https://www.vivekanandacollege.edu.in/assets/images/slide_3.webp">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="https://www.edtechplatform.net/wp-content/uploads/2023/06/k12-edtech-companies.png">
				
			</div> 

			<div class="col-md-8">

				<h1>Welcome to NABZUB_ed.tech</h1>

				<p>NABZUB_ed.tech is a leading online educational platform offering a wide range of courses in Web Development, Graphic Design, Marketing, and more. Our mission is to make quality education accessible to all, providing both theoretical and practical knowledge. Our expert instructors bring real-world experience, delivering engaging video lectures and hands-on projects. The platform supports self-paced learning and guided learning paths, catering to different learning styles. We offer recognized certifications upon course completion, enhancing professional credentials. NABZUB_ed.tech also provides career support, including resume building and job placement assistance, along with a vibrant community for networking. Join us to unlock new career opportunities and pursue your passions.</p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>

 
	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="https://thedailyguardian.com/wp-content/uploads/2022/04/Why-Teacher-Performance-Evaluations-Are-Important.jpg">

				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQicemPUTwY9p1GrpB_-3wjgxlROd7f6OhsLg&s">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="https://futuresa.co.za/wp-content/uploads/2023/10/teacher.png">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="https://miro.medium.com/v2/resize:fit:1200/0*M4bxiCIjcTK-2Xr6.jpeg">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="https://res.cloudinary.com/hamstech/images/v1637134439/Hamstech%20App/Title-Image-4_80465274aebb5/Title-Image-4_80465274aebb5.jpg?_i=AA">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="https://emeritus.org/in/wp-content/uploads/sites/3/2022/11/IIMK-ASMP-1024x576.jpg.optimal.jpg">
				<h3>Marketing</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" 
            name="apply">
		</div>


		</form>
		
	</div>


	<footer>
		<h3 class="footer_text">Made With 💗 By Nabi,Zubair,Nabneet</h3>
	</footer>


</body>
</html>