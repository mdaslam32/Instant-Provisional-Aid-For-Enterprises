<?php
 		$conn = mysqli_connect("localhost","root","","intern1") or die("failed to connect database");	


	
	
		

		


	
		$jid=$_REQUEST['jid'];
		
		$qt=mysqli_query($conn,"update apply set status='1' where id='$jid'");
		
		if($qt){?>
		 <script> alert('Accepted successfully')
window.location.href=("empjobstatus.php");</script>
<?php } ?>
		