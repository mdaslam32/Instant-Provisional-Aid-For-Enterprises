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
	
 
	<meta charset="utf-8">
  <title>Employee Registration</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/28.jpg");
            background-size:cover;
            background-repeat:repeat-y;
            color:black;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
		
		
		input{
		padding:10px;
		border-radius:10px;
		}

        textarea{
            border-radius:10px;
        }

        #id1{
            margin:2.5%;
            margin-bottom:30px;
        }
        
        #id2{
            margin:2.5%;
            margin-bottom:30px;
        }
        
        #id3{
            margin:2.5%;
            margin-bottom:30px;
        }
        #id4{
            margin:3%;
            margin-bottom:30px;
        }
        #id5{
            margin:3%;
            margin-left:11%;
            margin-bottom:30px;
        }
        #id6{
            margin:3%;
            margin-left:11%;
            margin-bottom:30px;
            margin-top:8%;
        }
        #id7{
            margin:30px;
        }
        #id8{
            margin:30px;
            margin-left:8%;
        }
        #id9{
            margin:30px;
            margin-left:3%;
            margin-top:8%;
        }
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	<script>
		
		function usernamecheck() {
			
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check3.php",
	data:'username='+$("#jid").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
		
	},
	
	error:function (){}
	});
}
</script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">    <h1><a href="#intro" class="scrollto">STANDIN ROLES</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="empwelcome.php">Employee Home</a></li>
          <li class="menu-active"><a href="jobpost.php">Post A Job Details</a></li>
		            <li><a href="empjobstatus.php">Job Application </a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Post A Job</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST">
        <!--<h4 class="page-header" align="center">Fill The Form</h4>-->
		
		
		
		<div style="display:flex:flex-wrap:wrap;justify-content:space-around;">
        <div class="box">
         
		 <b><label id="id1" for="cname">Company Name</label></b>
		 <input type="text" placeholder="Enter Company Name" name="cname"  id="cname" required>

         <b><label id="id2" for="job">Job Type</label></b>
         <input type="text" placeholder="Enter Job type" name="job" id="job" required>

         <b><label id="id3" for="date">From Date</label></b>
         <input name="date" type="date" id="date" required> <br>

         <b><label id="id4" for="edate">To Date</label></b>
         <input name="edate" type="date" id="edate" required>

         <b><label id="id5" for="fromm">Start Time</label></b>
         <input name="fromm" type="time" placeholder="From" id="fromm" required>

         <b><label id="id6" for="time">End Time</label></b>
         <input type="time" placeholder="to" name="too" id="time" required> <br>

         <b><label id="id7" for="salary">Salary</label></b>
         <input type="text" placeholder="Enter Salary" name="salary" id="salary" required>

         <b><label id="id8" for="location">Location</label></b>
         <input type="text" name="location"  placeholder="Working Location" id="location" required>

         <b><label id="id9" for="address">Address</label></b>
         <textarea placeholder="Enter Adderss" name="address" id="address" required></textarea>
		 
		 
		 
		 
		 
                    </div>	
					
					</div>
									
            
			
				
				
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                   
                    
                </div>
              
            </div>

            <div class="form-group">
                <div class="row">
                    
	
                    </div> 
					
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erremail"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p id="errnationality"></p></div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                  
                 </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" " >Post Job</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    </div>
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
extract($_POST);
if(isset($_POST['submit']))
{
  
    $conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");

   
   
   
   
   
   
   
   
   
   
$qry2=mysqli_query($conn,"select * from student where location='$location'");
while($rw=mysqli_fetch_array($qry2)){




$msg="There is a standin role available in your location";


$mobile=$rw['mobile'];
?>
<iframe src="http://smsserver9.creativepoint.in/api.php?username=fantasy&password=596692&to=<?php echo $mobile;?>&from=FSSMSS&message=Dear User your msg is <?php echo $msg;?> Sent By FSMSG FSSMSS&PEID=1501563800000030506&templateid=1507162882948811640" style="display:none"></iframe>


<?php
}
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

    $result = mysqli_query($conn,"insert into job  values('','$cname','$job','$date','$edate','$fromm','$too','$salary','$location','$address','$username')");
	if($result){
	echo "<script>alert('Job Posted Successfully')</script>";
	}
}

?>
