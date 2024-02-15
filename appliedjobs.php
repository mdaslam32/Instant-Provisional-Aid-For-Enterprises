<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:studentlogin.php");
	}
	
	echo $username=$_SESSION['username'];
	
	
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
			color: black;
			margin-top: 100px;
		}
		
		th,td{
			padding: 20px;
			opacity: 0.9;
			color: black;
			
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
        <h1><a href="#intro" class="scrollto">STANDIN ROLES</a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomestudent.php">Jobseeker Home</a></li>
          <li><a href="mainjobs.php">View Jobs</a></li>
      
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	
    <div style="text-align:center">
		<div align="center"><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
		<form method="POST">
    <div style="text-align: right">
	<label>Search: </label>	
    <input type="text" placeholder="Type To Search" name="key" autocomplete="off" style="border-right:none; border-left: none; border-top:none;outline: none;border-bottom: 1px solid white;background-color:transparent; color: black"  >
			
			 <button type="submit" class="btn btn-info btn-xs" name="sub" >
     			 <span class="glyphicon glyphicon-search"></span> Search
   					 </button>
		</form>
		
		
		</div>
    </div>
	
	
	
	
  
     <table width="97%" align="center">
	
	
	
	<tr>
		<td colspan="10" align="center">Job Status</td>
  </tr>

	
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="11%"><div align="center" class="style6"><strong>Company Name</strong> </div></td>
		   <td width="10%"><div align="center" class="style6"><strong>Job</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>Salary</strong> </div></td>
			  <td width="17%"><div align="center" class="style6"><strong>Status</strong> </div></td>
			 
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		
		
			$conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");	
		
		
		$qry=mysqli_query($conn,"select * from apply where uid='$username' && status='1'|| status='2'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$jid=$row['jid'];
		$sts=$row['status'];
		$qry1=mysqli_query($conn,"select * from job where id='$jid'");
		$row1=mysqli_fetch_array($qry1);
		?>
        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row1['cname'];?></div></td>
			  <td><div align="center"><?php echo $row1['job'];?></div></td>
		  	 <td><div align="center"><?php echo $row1['address'];?></div></td>
			   <td><div align="center"><?php echo $row1['salary'];?></div></td>
			    <td><div align="center"><?php if($sts==1)
				
									{
															echo "Selected";
									}
									elseif($sts==2)
									{
									
									echo "rejected";
									
									}elseif($sts='')
									{
									
									echo "waiting";
									
									}
									?>
				
				</div></td>
			     </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="11%">&nbsp;</td>
		
		
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
			
			
            <?php
			
			
			
			
			if(isset($_POST['sub']))
				{ $link=mysqli_connect("localhost","root","","intern1") or die($link);
						$k=$_POST['key'];
	
				$k=mysqli_real_escape_string($link,$k);
				
				$result=mysqli_query($link,"select * from job where cname like '%".$k."%' or jdesc like '%".$k."%'  or jpost like '%".$k."%'  or loc like '%".$k."%'  or sal like '%".$k."%' or uname like '%".$username."%' ") or die("failed to query database".mysqli_error($link));
                if ($result->num_rows > 0) 
				{
                    while($row = $result->fetch_assoc()) 
					{
						$jid=$row['jid'];
						
                         echo "<tr><td><form action='' method='post'>".$row['jid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['jpost']."<td>".$row['sal']."</td><td>".
                            
                            "<button type='submit' class='btn btn-xs btn-danger' name='_view2' id='_view2' onclick=cancel('".$jid."')>Cancel</button></form> <br> <br>";
						if(isset($_POST['_view']))
						 {
							
							
							
							
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";
						 }
                    }
                }
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
				
				
	
			}
			
			else if(!isset($_POST['sub']))
			{
				$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
				
                $query = "select * from job where uname like '%".$username."%'";
				//$x= $_COOKIE['x'];
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
						
						$jid=$row['jid'];
                        echo "<tr><td><form action='' method='POST'>".$row['jid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['jpost']."<td>".$row['sal']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-danger' name='_view2' id='_view2' onclick=cancel('".$jid."')>Cancel</button></form> <br> <br>";
						 if(isset($_POST['_view']))
						 {
							 
							 
	
	
							 
							 
							 
							 
						 }
						
                    }
                }
				
				
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
			}  
			
			
                
                else
				{
                    echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
                }
			   
			   ?>
			
		

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
