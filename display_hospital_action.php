<html>
	<head>
		<style>
		*{margin: 0;}
		.bg{
						background-color: #19555e;
			background-image: linear-gradient(160deg, #19555e 0%, #409ec7 20%, #47dcd2 37%, #1c7b83 61%, #1f627f 80%, #72d7e6 100%);
					height:1000px;
					background-position:center;
					background-repeat:no-repeat;
					background-size:cover;
					opacity:0.8;
				   }
			#title{
				background-color:transparent;
				font-size:24px;
        font-family: sans-serif;
				color:white;
				margin-left:30px;
        margin-top: 13px;
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



			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;

			}
			#card{
				margin:50px 150px;margin-bottom: 100px;
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

			table,td,th
			{
				margin-left:10px;
				border:1px #EEEEEE;
				align:center;
				font-size:18px;
				text-align:center;
        font-family: sans-serif;
				padding-left:25px;
				padding-right:25px;
				padding-top:20px;
				padding-bottom:20px;
			}
			table{margin:auto;}

		</style>
	</head>

	<body>


  <div class="bg">

		<ul>
			<li id="titlehead"style="text-decoration-color:Black;"><p id="title" style="font-size:30px;";>iREPORT</p></li>
			<li><a href="about_us.php">About us</a></li>
			<li><a class="active" href="admin_login.php">Admin</a></li>
			<li><a  href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
      <br></br>	<h2 style="font-style:italic; font-family: sans-serif;color: #fff;font-size:30px;padding-left:30px;">Registered Hospitals</h2>
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

		$sql2 = "CREATE TABLE IF NOT EXISTS hospital (
			hospital_id int(50) NOT NULL AUTO_INCREMENT,
			hospital_name VARCHAR(300),
			hospital_address VARCHAR(600),
                        PRIMARY KEY(hospital_id)
		)";



		if ($conn->query($sql2) === TRUE) {
		//echo "Table traffic_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}

		/*$sql1 = "INSERT INTO hospital (hospital_name ,hospital_address )
		VALUES ('Aditya Super Speciality Hospital & Trauma Center','Napier Town, opposite little kingdom school,Jabalpur, Madhyapradesh'),
		('K J Memorial Hospital ','Opposite Singhai Petrol Pump,BeoharBagh,Jabalpur, Madhyapradesh'),
		('Anant Hospital','Madan Mahal Railway Station Rd, Wright Town, Jabalpur, Madhyapradesh'),
		('Triveni Health Care( A Unit Of Jamdar Hospital)','1480, Wright Town , Jabalpur, Madhyapradesh'),
		('Life Medicity Hospital','Aaga Chowk near Baldeobagh, Jabalpur , Madhyapradesh'),
		('National Hospital',' Wright Town , Jabalpur, Madhyapradesh'),
		('Kothari Hospital','Gate No. 4 Chauraha, Wright Town, Jabalpur, Madhyapradesh'),
		('Dr. Balwant Harshey (National Hospital)','Garha Rd, Labor Chowk , Jabalpur, Madhyapradesh'),
		('Shree Shubham Hospital and Research Center','National Highway 12A, Premnagar, Jabalpur, Madhyapradesh')";


if ($conn->query($sql1) === TRUE) {
    //echo "New record created successfully";
}else {
echo "Error creating table: " . $conn->error;
}*/


$sql = "SELECT hospital_id,hospital_name,hospital_address FROM hospital";
$result = $conn->query($sql);


echo "<table id='card' border='2'>";
echo "<tr>";
echo "<th> HOSPITAL ID </th>";
echo "<th> HOSPITAL NAME </th>";
echo "<th> HOSPITAL ADDRESS  </th>";
echo "</tr>";
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['hospital_id'] . "</td>";
		echo "<td>" . $row['hospital_name'] . "</td>";
		 echo "<td>" . $row['hospital_address'] . "</td>";
		print "</tr>";
	}
}


else {
	echo "<div id='card'><br></br><p>ERROR COULDN'T DISPLAY.</p><form action='admin_home.php' method='post'><button type='submit' id='done'>Done</button><br></br></form></div>";

}

		$conn->close();

		?>

</body>


  </div>


</html>
