<html>
	<head>
		<style>
		*{
			margin: 0px;
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

			#title{
				background-color:transparent;
				font-size:24px;
				color:white;
				margin-left:30px;
			margin-top: 11px;
      font-family: sans-serif;
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
				color:white;
			}



			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-image: linear-gradient(to right, #085078 0%, #85D8CE  51%, #085078  100%);
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
				text-align: center;
				text-transform: uppercase;
				transition: 0.5s;
				background-size: 200% auto;
				color: white;
				box-shadow: 0 0 20px #296379;
				border-radius: 10px;
				display: block;
			}

			input[type=submit]:hover {
				background-position: right center; /* change the direction of the change here */
				color: #fff;
				text-decoration: none;
			}

			.container {
				border-radius: 5px;
				background-color: transparent;
				padding: 20px;
			}

			.cont{
				background-position:center;
				 background: rgb(0, 0, 0);
				background: rgba(0, 0, 0, 0.5);
				color: #f1f1f1;
         padding-top: 25px; font-family: sans-serif;
			}


			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
			}


		</style>
	</head>

	<body>

		<div class="bg">

		<ul>
			<li id="titlehead"style="text-decoration-color:white;"><p id="title" style="font-size:30px;">iREPORT</p></li>
			<li><a href="about_us.php">About us</a></li>
			<li><a class="active" href="admin_login.php">Admin</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>


    	<div class="cont">
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">Add New user</h2>
     <br><br>

		<div class="container">
			<form action="add_user_action1.php" method = "post">



				<div class="row">
					<div class="col-25">
						<label for="lname">Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="username" placeholder=" Name...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="lname">Password</label>
					</div>
					<div class="col-75">
						<input type="password" pattern=".{1,}" required name="userpass" placeholder=" password...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="lname">Address</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="useraddress" placeholder=" address...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="lname">Phone Number</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="usernumber" placeholder=" phone no...">
					</div>
				</div>

				<div class="row">
					<div class="col-25">
						<label for="lname">E-mail</label>
					</div>
					<div class="col-75">
						<input type="email" pattern=".{1,}" required name="useremail" placeholder="email address...">
					</div>
				</div>

     <br><br>

				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit"><br>
				</div>
			</form>



		</div>

		</div>
		</div>

	</body>





</html>
