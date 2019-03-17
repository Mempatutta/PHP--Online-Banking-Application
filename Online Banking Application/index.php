<html>
	<head>
	<title>Online bank</title>
	<link rel="stylesheet" href="main.css">
	</head>
		<body>

			<div class="container">
			<?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> Welcome to Online bank!</B> </marquee></p>";
			?>
			<button type="button" onclick="location.href='login.php'">LOGIN</button><br/>
		
			<button type="button" onclick="location.href='register.php'">REGISTER</button>
		
			
	<html>
		<head>
  
		<script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var monthArray =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=monthArray[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayArray =["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
	  day=dayArray[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	  
	  
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
</head>

<body>
   <h1></h1>
   <p id="date"></p>
   <p id="time"></p>  

</body>
</html>
	</div>
	</body>

</html>

