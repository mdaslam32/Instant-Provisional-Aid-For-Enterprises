<?php
 		$conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");	
	extract($_POST);
	session_start();
	echo $uid=$_SESSION['username'];

	
		$jid=$_REQUEST['id'];
		
		$qt=mysqli_query($conn,"insert into apply(uid,jid,status)values('$uid','$jid','')");
		
		if($qt){?>
		
		
		
		 <script> alert('Applied successfully')
window.location.href=("mainjobs.php");</script>



<?php } 
	?>
		