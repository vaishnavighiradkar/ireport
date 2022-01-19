<html>
	<head>
		<style>
		*{margin: 0;}
		#title{
			background-color:transparent;
			font-size:24px;
			color:white;
			margin-left:20px;
      margin-top: 15px;font-family: sans-serif;
			}

		ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: transparent;
		}

		li {
			float: right;
		}

		#titlehead{
			float: left;
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
			background-color: rgb(44, 139, 160,0.4);
			color:black;
		}


		#home_img{
			padding-left:50px;
			padding-bottom:10px;

		}

		#bottom_posts{

			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;

		}

		#img_title{

			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;

		}

		#posts{
			padding: 20px;
			font-size: 30px;
			text-align: center;

		}
		#card{
			margin:150px;
			height:270px:
			padding :50px;
			font-size: 24px;
			text-align: center;
			color: #fff;
			background: rgba(0, 0, 0, .5);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
			border-radius: 10px;
		}

		#done{
			background-image: linear-gradient(to right, #085078 0%, #85D8CE  51%, #085078  100%);
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				text-align: center;
				text-transform: uppercase;
				background-size: 200% auto;
				color: white;
				box-shadow: 0 0 20px #296379;
				border-radius: 10px;
				display: block;
				margin-left: 550px;margin-top: 40px;
		}


		.bg{
						background-color: #19555e;
			background-image: linear-gradient(160deg, #19555e 0%, #409ec7 20%, #47dcd2 37%, #1c7b83 61%, #1f627f 80%, #72d7e6 100%);
					height:1000px;
					background-position:center;
					background-repeat:no-repeat;
					background-size:cover;
					opacity:0.8;
				   }
		</style>
	</head>

	<body>


 <div class="bg">


		<ul>
			<li id="titlehead"style="text-decoration-color:Black;"><p id="title" style="font-size:30px;";>iREPORT</p></li>
			<li><a href="about_us.php">About us</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a class="active" href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>



<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="report";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}


$sql = "CREATE TABLE IF NOT EXISTS accident(
accidentid int(50) NOT NULL AUTO_INCREMENT,
deaths integer(50),
injured integer(50),
reporter_num varchar(50),
location varchar(150),
userid int(50),
victim_name varchar(50),
reporter_name varchar(50),
date date,
time varchar(10),
hospitals varchar(100),
verifyid int(50),
PRIMARY KEY(accidentid),
FOREIGN KEY (userid) REFERENCES user(user_id)
)";




		if ($conn->query($sql) === TRUE) {
		//echo "Table traffic_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}

    $victim_name= filter_input(INPUT_POST,'victim_name');
		$reporter_name= filter_input(INPUT_POST,'reporter_name');
    $contact_num= filter_input(INPUT_POST,'contact_num');
    $location= filter_input(INPUT_POST,'location');
    $date= filter_input(INPUT_POST,'date');
    $time= filter_input(INPUT_POST,'time');
    $hospitals= filter_input(INPUT_POST,'hospitals');
    $injured= filter_input(INPUT_POST,'injured');
    $deaths= filter_input(INPUT_POST,'deaths');



		$sql = "INSERT INTO accident(victim_name,reporter_name,reporter_num,location,date,time,hospitals,injured,deaths)
		VALUES ('$victim_name','$reporter_name','$contact_num','$location','$date','$time','$hospitals','$injured','$deaths')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<div id='card'><br></br><p>Accident Successfully Added</p><form action='user_home.html' method='get'><button type='submit' id='done'>Done</button><br></br></form></div>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

		$conn->close();

		?>
</div>
</body>





</html>
