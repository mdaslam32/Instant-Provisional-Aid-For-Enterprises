
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
            background: url("img/intro-carousel/29.jpg");
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
		

        #uname{
            width:98%;
        }
        #loc{
            width:55%;
            margin-left: 22%;
        }
        #mark2{
            width:55%;
            margin-left:22%;
        }
        #mark3{
            width:120%;
            height:10;
        }
        #mob{
            width:80;
        }
        #pass{
            width:60%;
            margin-left:20%;
        }
        #lpass{
            margin-left:90%;
        }
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	<script>
		
		function usernamecheck() {
			
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check2.php",
	data:'username='+$("#uname").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
		
	},
	
	error:function (){}
	});
}
</script>
	
	
	
	<script>
			
		function fun()
			{
				 document.getElementById("marriael").style.display="none";
				 document.getElementById("marriage").style.display="none";
				 var x=document.getElementById("male").checked;
				
				  	if(x==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
				
				 var y=document.getElementById("female").checked;
				
					if(y==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb2").style.display="none";
										document.getElementById("lb1").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
					
				
				 var z=document.getElementById("others").checked;
				
					if(z==true)
										{
											document.getElementById("marriael").style.display="none";
											document.getElementById("marriage").style.display="none";
											document.getElementById("lb1").style.display="none";
											document.getElementById("lb2").style.display="none";
											document.getElementById("pname").style.display="none";
										}
									else
										{
											document.getElementById("marriael").style.display="block";
											document.getElementById("marriage").style.display="block";
										}
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
          <li><a href="home.php">Home</a></li>
          <li><a href="empreg.php">Enterprise Registration</a></li>
          <li  class="menu-active"><a href="studentreg.php">Jobseekers Registration</a></li>
		 <li class="menu-has-`children"><a href="#">Login</a>
            <ul>
              <li><a href="emplogin.php">Enterprise</a></li>
              <li><a href="studentlogin.php">Jobseekers</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Welcome New Member</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST">
        <!--<h4 class="page-header" align="center">Fill The Form</h4>-->
                <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-2">
                        <b><label id="luname">Username<span>&#42;</span></label></b>
                    </div>
                     <div class="col-md-3">
                        <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" onBlur="usernamecheck()" required>
						 <span id='user-availability-status'></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="right"></span> </div>             

                     <div class="col-md-3 text-right">
                     <b><label id="lsname" style="display: none">&nbsp;&nbsp;&nbsp;Name<span>&#42;</span></label></b>
                    </div>
                     <div class="col-md-3">
                        <input type="text" class="form-control" id="sname" placeholder="Enter Your name" name="sname" pattern=[A-Za-z]{2,30} title="Only alphabet" style="display: none" required>
                    </div>    
                       
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"><p id="errlname"></p></div>
                  </div>
            </div>

            <div class="form-group">
                <div class="row">
                    	<div class="col-md-1">
                        <b><label id="lmob" >Location<span>&#42;</span></label></b>
                    </div>
					<div class="col-md-5">
					<input type="text" name="loc" id="loc" class="form-control" placeholder="Location" style="width:130px;"  required>
                </div>
					
                    <div class="col-md-2 text-right">
                    <b><label id="lmark1" style="display: none">&nbsp;&nbsp;Age:<span>&#42;</span></label></b></div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="mark1" placeholder="Enter Your Age" name="mark1" onKeyPress="return( event.charCode >47 && event.charCode < 58)"style="height:45px;display:none" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-1">
                    <b><label id="lmark2" style="display: none">Aadhaar Number<span>&#42;</span></label></b></div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="mark2" placeholder="Enter Aadhaar Number" name="mark2" onKeyPress="return( event.charCode >47 && event.charCode < 58)" required style="display: none">
                    </div> 
                    <div class="col-md-2 text-right">
                    <b><label id="lmark3" style="display: none">&nbsp;&nbsp;Address:<span>&#42;</span></label></b>
                </div> &nbsp; &nbsp; &nbsp;<div><textarea class="form-control" id="mark3" placeholder="Enter Address" name="mark3"  required style="display: none"></textarea></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="errmobile"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3"><p id="errdob"></p></div>
                </div>
            </div>
			
			 <div class="form-group">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <table id="gender">
                            <tr>
                                <b><th style="padding-top:10px;">
                                <b><label id="lgender" style="display: none">&nbsp;&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;</label></b></th>
                                <td>
                                <b><label class="radio radio-inline" id="lmale" style="display: none" >
                                <input type="radio" name="gender" value="male" id="male" onClick="fun()" style="display: none">Male&nbsp;&nbsp;</label></b>
                            </td>
                                <td>
                                <b><label class="radio radio-inline" id="lfemale" style="display: none" ><input type="radio" name="gender" id="female" value="female" onClick="fun()" style="display: none" />Female</label></b></td>
								<td>
                                <b><label class="radio radio-inline" id="lothers" style="display: none"><input type="radio" name="gender" id="others" value="others" onClick="fun()" style="display: none" />Others</label></b></td>
                            </tr>
                        </table>
						
						<b><label id="marriael" style="display: none">Meretial Status: </label></b>
						<select id="marriage" name="marriage" onChange="fun()" class="form-control" style="display: none">
						<b><option value="Unmarried" id="Unmarried" class="form-control" selected>Unmarried</option></b>
						<b><option value="Married" id="Married" class="form-control">Married</option>
						</select></b>
						<br><br>
		
						<b><label id="lb1" style="display:none" >Enter Husbend's Name:</label></b>
						<b><label id="lb2" style="display:none">Enter Wife's Name:</label></b>
						<input type="text" id="pname" name="pname" class="form-control" style="display: none">
						

									</div> 
								 </div>
							</div>
			
			<div class="form-group">
                <div class="row">
					<div class="col-md-1">
                    <b><label id="lmob" style="display: none">Mobile Number<span>&#42;</span></label></b>
                </div>
					<div class="col-md-5">
					<input type="text" name="mob" id="mob" class="form-control" placeholder="Phone Number" minlength="10" maxlength="10" style="width:130px;display: none;" required> </div>
					
					
					
                    <div class="col-md-1">
                    <b><label id="lpass" style="display: none">Password:<span>&#42;</span></label></b>
                </div>
                    <div class="col-md-5">
                        <input type="password" class="form-control" id="pass" placeholder="Enter Your Password" name="pass" required style="display: none"></div> 
				</div>
			</div>
			

           

           
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" style="display: none">Register</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
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
    //$sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $mob = $_POST['mob'];
    $ten = $_POST['mark1'];
    $tentwo = $_POST['mark2'];
    $grad = $_POST['mark3'];
    $gender = $_POST['gender'];
    $m_status = $_POST['marriage'];
    $pname = $_POST['pname'];
	$uname= $_POST['uname'];
    $pass = $_POST['pass'];
	   
	
	
    $conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");

    //$eid = mysqli_real_escape_string($conn,$eid);
	$sname = mysqli_real_escape_string($conn,$sname);
	$mob = mysqli_real_escape_string($conn,$mob);
	$ten = mysqli_real_escape_string($conn,$ten);
	$tentwo = mysqli_real_escape_string($conn,$tentwo);
	$grad = mysqli_real_escape_string($conn,$grad);
	$gender = mysqli_real_escape_string($conn,$gender);
	$m_status = mysqli_real_escape_string($conn,$m_status);
	$pname = mysqli_real_escape_string($conn,$pname);
	$uname = mysqli_real_escape_string($conn,$uname);
	

    $result = mysqli_query($conn,"insert into student values ('$sname','$mob','','$ten','$tentwo','$grad','$gender','$m_status','$pname','$uname','$pass','$loc')") or die("Query Failed".mysqli_error($conn));
	echo "<script>alert('Registration Successfull')</script>";
	echo "<script>location.href='studentlogin.php'</script>";
}

?>
