<html>
	<head>
		<style>

    *{margin: 0;}
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
			.bg{
					background-color: #19555e;
			    background-image: linear-gradient(160deg, #19555e 0%, #409ec7 20%, #47dcd2 37%, #1c7b83 61%, #1f627f 80%, #72d7e6 100%);
					height:1000px;
					background-position:center;
					background-repeat:no-repeat;
					background-size:cover;
					opacity:0.8;
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

			#card{
				margin:50px 150px;
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
				cursor: pointer;
				text-align: center;
				text-transform: uppercase;
				background-size: 200% auto;
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
				padding-left:35px;
				padding-right:35px;
				padding-top:15px;
				padding-bottom:15px;
			}
			table{margin:auto;}


		</style>
	</head>

	<body>

   <div class="bg">

		<ul>
			<li id="titlehead"style="text-decoration-color:white;"><p id="title" style="font-size:30px;">iREPORT</p></li>
			<li><a href="about_us.php">About us</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>

	<br></br><h2 style="font-style:italic; font-family: sans-serif;color: #fff;font-size:30px;padding-left:30px;">Reported Accidents</h2>

<?php
		error_reporting(0);
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

		$hospitalname = filter_input(INPUT_POST,'hospitalname');

    $sql = "SELECT accidentid,victim_name,hospital_name,date,time FROM accident,hospital
          WHERE hospitals = hospital_id AND hospital_name LIKE '$hospitalname%'
          ORDER BY date ASC ,time  ASC";
    $result = $conn->query($sql);

      if ($result->num_rows > 0) {
    echo "<table id='card' >";
    echo "<tr>";
    echo "<th>ACCIDENT ID</th>";
    echo "<th>VICTIM NAME</th>";
    echo "<th>HOSPITAL NAME</th>";
    echo "<th>DATE</th>";
    echo "<th>TIME</th>";
    echo "</tr>";
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['accidentid'] . "</td>";
        echo "<td>".$row['victim_name'] . "</td>";
         echo "<td>".$row['hospital_name'] . "</td>";
          echo "<td>".$row['date'] . "</td>";
            echo "<td>".$row['time'] . "</td>";
        print "</tr>";
      }
    }
}


    else {
      echo "<div id='card'><br></br><p>ENTER VALID HOSPITAL</p><form action='admin_home.php' method='post'><button type='submit' id='done'>Done</button><br></br></form></div>";
    }

		?>

</body>
  </div>
</html>
