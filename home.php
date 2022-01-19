<html>
	<head>
		<style>
		*{
		margin: 0px;
	}

			.bg{
			background-image:url("img/bg1.jpg");
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;

		   }


			#title{
				background-color:transparent;
				font-size:24px;
				color:#E53935;

				color:white;
				margin-top: 14px;
				margin-left:30px;
        font-family: sans-serif;
				}

			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color:transparent;
			}

			li {
				float: right;
			}

			#titlehead{
				float: left;
				font-family: sans-serif;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: rgba(0, 0, 0, 0.5);
				color:#fff;
			}

      .im{  height:50px; width:50px;float: left;}

			#home_img{
				padding-left:50px;
				padding-bottom:10px;

			}

			#bottom_posts{

				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
        margin: 0px;
        color: #f1f1f1;

			}

			#img_title{

				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px; padding-bottom: 20px;
				  color: #f1f1f1;
					margin: 0px;

			}

			#posts{
				padding: 15px; padding-bottom: 50px;
				font-size: 30px;
				text-align: center;
         font-style: sans-serif;
          color: #f1f1f1;
						background: rgba(0, 0, 0, 0.5);
						margin: 0px;
			}

			.cont{
				background-position:center;
				background: rgba(0, 0, 0, 0.5);
				color: #f1f1f1;
        height: 450px;
				font-size: 20px;
				text-align: center;
				margin: 0px;
			}
			.heading{
				padding-top: 180px;
				font-size: 69px;

			}
		</style>
	</head>

	<body class="bg">

		<ul>
			<li id="titlehead"><p id="title"style="text-decoration-color:White;font-size:30px;">iREPORT</p></li>
			<li><a href="about_us.php"><strong>About us</strong></a></li>
			<li><a href="admin_login.php"><strong>Admin</strong></a></li>
			<li><a href="user_login.php"><strong>User</strong></a></li>
			<li><a class="active" href="home.php"><strong>Home</strong></a></li>
		</ul>

<div class="cont">
	<h1 class="heading">ROAD ACCIDENT ASSISTANCE SYSTEM</h1>
</div>


		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS report";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";



		$conn->close();
		}
		?>

		<div id=bottom_posts style="margin-top:50px;">

			<div id=posts>
          <img class="im" style="margin-left:30px;" src="img\accident-modified.png">
				<div id=img_title>
						<h2 style="font-size:28px;text-align:left;" text-align="left;"> REPORT ACCIDENT</h2><br>
				</div>
					<p style="font-size:20px;">User friendly accident reporting system.</p>
				</div>
			<div id=posts>
				<img class="im" style="height:48px;width: 48px;margin-left:100px;" src="img\firstaid-modified.png">
				<div id=img_title>
          <h2 style="font-size:28px;text-align:left;" > FIRST AID</h2><br>
				</div>
				<p style="font-size:20px;">First Aid information in case of emergency.</p>
			</div>
			<div id=posts>
				<img class="im" style="margin-left:60px;" src="img\search-modified.png">
				<div id=img_title>
					<h2 style="font-size:28px;text-align:left;">ACCIDENT DETAIL MANAGEMENT</h2><br>
				</div>
				<p style="font-size:20px;">Any accident records can be accessed in few seconds</p>
			</div>
			</div>
	</body>





</html>
