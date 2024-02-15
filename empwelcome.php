<?php
	session_start();
	if(!isset($_SESSION['empname'])){
		header("location:emplogin.php");
		
	}
	$username=$_SESSION['empname'];
?>

<!DOCTYPE html>
<html>
<head>
	
	
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
   <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
    <style>
		
		
        body{
            background: url("img/intro-carousel/34.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
		
		table,th,td{
			margin: auto;
			border: none;
			border-radius: 20px;
			border-collapse: collapse;
			text-align: center;
			font-size: 16px;
			table-layout: auto;
			background-color:#043E63;
			color: white;
			margin-top: 100px;
		}
		
		th,td{
			padding: 20px;
			opacity: 0.9;
			color: white;
			
		}
		
		th{
			background-color: darkblue;
			color: white;	
		}
		
		
		td:hover
		{
			background-color: cornflowerblue;
			color: black;
		}
		
		tr:hover{
			background-color: black;
		}
		
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: relative;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:500px;
	height: 500px;
}
		
		
		
    </style>
</head>
<body id="back">
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" ></a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
           <li class="menu-active"><a href="empwelcome.php">Employee Home</a></li>
          <li ><a href="jobpost.php">Post A Job Details</a></li>
		            <li><a href="empjobstatus.php">Job Application </a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	
   
   
    </div>
	
	
	
<table width="97%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Posted Job History</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Company Name</strong> </div></td>
		   <td width="10%"><div align="center" class="style6"><strong>Job Type</strong> </div></td>
		   <td width="8%"><div align="center" class="style6"><strong>From Date</strong> </div></td>
		    <td width="9%"><div align="center" class="style6"><strong>To Date</strong> </div></td>
			 <td width="8%"><div align="center" class="style6"><strong>From Time</strong> </div></td>
		    <td width="9%"><div align="center" class="style6"><strong>To Time</strong> </div></td>
			 <td width="11%"><div align="center" class="style6"><strong>Salary</strong> </div></td>
						 <td width="11%"><div align="center" class="style6"><strong>Address</strong> </div></td>
						
		
			 
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		
			$conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");	
		
		$qry=mysqli_query($conn,"select * from job where empid='$username'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>
		
		
		<tr>
		<td colspan="10">Job Title:<?php echo $row['job'];?></td>
  </tr>
	
		
		
		
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['cname'];?></div></td>
			  <td><div align="center"><?php echo $row['job'];?></div></td>
		   <td><div align="center"><?php echo $row['date'];?></div></td>
			  <td><div align="center"><?php echo $row['edate'];?></div></td>

			  <td><div align="center"><?php echo $row['fromm'];?></div></td>
			   <td><div align="center"><?php echo $row['too'];?></div></td>
						    <td><div align="center"><?php echo $row['salary'];?></div></td>
													    <td><div align="center"><?php echo $row['address'];?></div></td>
									
			     
  </tr>

		
		
        <?php
		$i++;
		}
		
		
		
		
		
		
		
		
?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>



			
			<script>
		function apply(jid)
		{
			
			//alert(jid);
			var ajx=new XMLHttpRequest();
			ajx.onreadystatechange=function()
			{
				if ( this.readyState == 4 && this.status == 200 )
				{
					alert(this.responseText);
				}
			}
			ajx.open( "POST", "apply.php", true );
			ajx.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
			ajx.send("jid=" +jid);
			
		}
				
				
			function cancel(jid)
				{
					var ajx=new XMLHttpRequest();
			ajx.onreadystatechange=function()
			{
				if ( this.readyState == 4 && this.status == 200 )
				{
					alert(this.responseText);
				}
			}
			ajx.open( "POST", "cancel.php", true );
			ajx.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
			ajx.send("jid=" +jid);
				}
	</script>
			
			
          
			
		

        </tbody>
    </table>
    </form>
	
	<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


<?php








?>
