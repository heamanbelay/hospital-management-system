
<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<style>
body{
	background-image:url(docs.jpg);
}
	.middle
	{
		margin:130px;
		text-align:left;
		font-size:20px;
		color:beige;
		text-align:justify;
	
	}
	.logo{

	padding: 0px 0px;
	width:30%;
	height:auto;
}

	
}

</style>

</head>
<title> Gamby General Hospital</title>
<body>
<header>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="LOG.png" CLASS="logo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <ul>
  <li  type="none" ><a href="docpage.php">doc home</a></li>
 
  </ul>
  		   
  
  
</nav>
</div>

</header>

 
<footer>
<h2>our interesting facts</h2><BR>
<P></P>
<a href="homepage.PHP"><h3>join us today</h3></a>
<br>
<h4 style="float:left;" style="font-size:20px;">
contact us<br>
Addres:BahirDar,kebele 08<br>
call Gamby :058 123464<br>
Emergencies- Appointmnets-Ambulances <br>
Available 24 hours everyday (24/7)<br>
</h4>
<h3>
Over 100 Specialised Doctors<br>
modernised equipments<br>
2402 total Graduates <br>
2660 facebook followers
</h3>

<p>GAMBY GENERAL HOSPITAL <BR>SINCE 1998</p>

</footer>
<div class="middle";>
<h2><center> <marquee direction="left" style="background-color:">  pre examnination record</marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> </marquee> </h2>   </center>
<?php

        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "hospital");      
            $sqlCheck = "SELECT patient_name,blood_pressure,body_temp,bmi,heart_beat FROM reception_record";
            $queryCheck = mysqli_query($connection, $sqlCheck);
			if (mysqli_num_rows($queryCheck)<=0) {//if the user already registered
                echo "Data not found ";
                
              }
			  else{
			echo "<table border='1'>
			<tr>
			<th>Patient Name</th>
			<th>Blood Pressure</th>
			<th>Body Tempreture</th>
			<th>BMI</th>
			<th>Heart Beat</th>
			</tr>";
			while($row = mysqli_fetch_array($queryCheck)){
				echo "<tr>";
				echo "<td>".$row['patient_name']."</td>";
				echo "<td>".$row['blood_pressure']."</td>";
				echo "<td>".$row['body_temp']."</td>";
				echo "<td>".$row['bmi']."</td>";
				echo "<td>".$row['heart_beat']."</td>";
			}
            
			  }
	}
    mysqli_close($connection);


?>
 </div>

</body>
</html>