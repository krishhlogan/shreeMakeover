<!DOCTYPE html>
<html>
<title>Shree Appointments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>
<h1 class="w3-teal w3-wide w3-center" width="100%">Appointment List</h1>
<div class='w3-table-all w3-center w3-container' style="margin-left:7%;margin-top:10%;width:80%;margin-right:7%;margin-bottom:7%">



<table>
<tr>
<th>ID</th>
<th>Signup Date</th>
<th>Fitst Name</th>
<th>Last Name</th>
<th>Email </th>
<th>Phone </th>
<th>Appointment Date </th>
<th> Appointment Time </th>
</tr>

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

$sql="Select * from appointment.details where appointmentdate='".date('m/d/Y')."'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    echo"<tr>
	     <td>".$row[0]."</td>
		 <td>".$row[1]."</td>
		 <td>".$row[2]."</td>
		 <td>".$row[3]."</td>
		 <td>".$row[4]."</td>
		 <td>".$row[5]."</td>
		 <td>".$row[6]."</td>
		 <td>".$row[7]."</td>
		 </tr>";
		 
	}
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($conn);

?>
</div>
</table>

</body>
</html>