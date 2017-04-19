<?php
$host="localhost";
$user="root";
$pwd="rec";
$db="appointment";
$conn=mysqli_connect($host,$user,$pwd,$db);
if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
  
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $mail=$_POST['mail'];
 $phone=$_POST['phone'];
 $appointmentdate=$_POST['date'];
 $appointmenttime=$_POST['time']; 
   
 $sql="insert into appointment.details (fname,lname,mail,phone,appointmentdate,appointmenttime) values('".$fname."','".$lname."','".$mail."','".$phone."','".$appointmentdate."','".$appointmenttime."');";
if (mysqli_query($conn, $sql)) {
	echo "<html><body>appointment succcessfull</body></html>";
	
 header("Location: index.php?status=success");
}
 else {
	 echo "appointment could not be made..";
    header("Location: index.php?status=failed");
}

mysqli_close($conn);


 


?>