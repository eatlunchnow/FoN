<?php include "includes/databaseconnect.php";?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Friends Of Noise - Member Page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>     
      <div class="top">
		  <h4>Hello, <?=$First_Name;?>!</br>
		  Member ID: <?=$memberID;?></h4>
      </div>
	
	<div class="middle">
		<img class="logo" src="images/FoNlogo.png">
	</div>

      <nav class="main">
        <ul>
          <li><a href="#">Home</a></li>
		    <li class="separator">|</li>
          <li><a href="#">Events</a></li>
	     	<li class="separator">|</li>
	      <li><a href="#">Merchandise</a></li>
	     	<li class="separator">|</li>
          <li><a href="login.html">Buy/Renew Membership</a></li>
	     	<li class="separator">|</li>
          <li><a href="login.html">Friends Of Noise</a></li>
        </ul>
      </nav>         
  
 <section id="account" class="width">
    <div class="container">      
       	<div class="content">
			<h1></h1>
			<hr>
		</div>		
		
		
		<div class="status">
			
				<h2>Member Status</h2>			
				<p class="mem_status"><?=$Status;?></p><br/>
			           
       </div>

       <!--	<div class="">
			<h2>Your Membership</h2>
			<p><img class="flyer" src="images/flyer.png"><a href="">DJ Myrie, Romero, Mahogany Menefee, Sensation Collective, JasonUndefined, Dmarx, Spit Infinity</a><br>
				Disjecta<br>
				Friday, March 8, 2019<br>
				6:30PM - 10:30PM PST<br>
				
			</p>
			
		
        </div>-->
			<div class="upcoming">
			<h2>Your Upcoming Events</h2>
			<p><img class="flyer" src="images/flyer.png"><a href=""><?=$eventName;?></a><br>
				<?=$eventDate;?><br>
				<?=$address;?><br>
				<?=$city;?>, <?=$state;?> <?=$zip;?><br>
				
			</p>
	
        </div>
		
		</div>
			<div class="renew">
				 <input type="submit" value="Renew Membership" class="renew_btn">
			<p>
				
			</p>
	
        </div>
		
      </div>
    </div>
  </section>
  
</body>
</html>