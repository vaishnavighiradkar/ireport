<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    *{margin: 0;}
    html {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: #19555e;
	background-image: linear-gradient(160deg, #19555e 0%, #409ec7 20%, #47dcd2 37%, #1c7b83 61%, #1f627f 80%, #72d7e6 100%);
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 700px;
      padding: 20px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, .5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
      border-radius: 10px;
    }

    .login-box h2 {
      margin: 0 0 30px;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .login-box .user-box {
      position: relative;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #9d9d9d;
      pointer-events: none;
      transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: #03e9f4;
      font-size: 12px;
    }



    .btn {
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

.btn:hover {
  background-position: right center; /* change the direction of the change here */
      color: #fff;
      text-decoration: none;
}

  </style>



</head>

<body>


  <div class="login-box">
    <h2>iREPORT</h2>
    <form action="add_accident_action.php" method="post">
      <div class="user-box">
        <input type="text" name="victim_name" pattern=".{1,}" required placeholder="VICTIM NAME">
      </div>
      <div class="user-box">
        <input type="text" name="reporter_name" pattern=".{1,}" required placeholder="REPORTER NAME">
      </div>
      <div class="user-box">
        <input type="text" name="contact_num" pattern=".{1,}" required placeholder="YOUR CONTACT NO">
      </div>
      <div class="user-box">
        <input type="text" name="location" pattern=".{1,}" required placeholder="LOCATION">
      </div>
      <div class="user-box">
        <input type="date" name="date" pattern=".{1,}" required value="date" class="date">
      </div>
      <div class="user-box">
        <input type="time" name="time" value="time" pattern=".{1,}" required class="TIME" placeholder="Time">
      </div>
      <div class="user-box">
        <label  style="fontsize: 10px;">HOSPITAL</label><br><br>
 <select name="hospitals" >
<option  value="1">Aditya Super Speciality Hospital & Trauma Center</option>
<option  value="2">K J Memorial Hospital </option>
 <option  value="3">Anant Hospital</option>
 <option  value="4">Triveni Health Care( A Unit Of Jamdar Hospital) </option>
 <option  value="5">Life Medicity Hospital</option>
<option  value="6">National Hospital</option>
 <option  value="7">Kothari Hospital</option>
 <option  value="8">Dr. Balwant Harshey (National Hospital) </option>
 <option value="9">Shree Shubham Hospital and Research Center</option>
</select>
      </div>
      <div class="user-box">
        <input type="text" name="injured" pattern=".{1,}" required placeholder="NO OF INJURED">
      </div>
      <div class="user-box">
        <input type="text" name="deaths" pattern=".{1,}" required placeholder="NO OF DEATHS">
      </div>

        <input class="btn" type="submit" id="button" name="submit">

    </form>

  </div>
</body>

</html>
