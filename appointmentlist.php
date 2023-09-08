<?php



?>
<html>
<head>
<style>
body{
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVmAbXTwe7dCvUm7LyTCpXsYDT4bdJzOZoZA&usqp=CAU");
background-size:cover;
}
.button1 {
  max-width:200px;
  background-color: green;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 10px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button2 {
  max-width:200px;
  background-color: red;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 10px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
.button3 {
  max-width:200px;
  background-color: black;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-family: inherit;
  display: flex;
  font-size: 15px;
  padding: 8px 35px 8px 35px;
  cursor: pointer;
  margin: 0 auto;
  color:white;
  weight: 50%;
}
h2
{color:white}
.box{  
  margin: 0 auto;
  justify-content: center;
  background-color:black;
  opacity: 0.9;
  border-radius: 5px;
  padding: 10px 0px 10px 20px;
  width: 50%;
  height: 5%; 
}
table, th, td {
	font-family: arial, sans-serif;
  border: 1px solid black;
  border-collapse: collapse;
    background-color: #dddddd;
}
</style>
</head>
<body>
<h2 class="box"><center>Appointment List</center></h2><br>
<table align="center" border="2" >

<tr>
<th>Appointment ID</th>
<th>Patients Name</th>
<th>Department</th>
<th>Doctor's Name</th>
<th>Date</th>
<th>Time</th>
<th>Patient's Email</th>
<th> Patient's Phone Number</th>



</tr>
<?php
include 'dbcon.php';
$selectquery="select * from appointments";
$query=mysqli_query($con,$selectquery);

while($result=mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['apid'];?></td>
<td><?php echo $result['pname'];?></td>
<td><?php echo $result['department'];?></td>
<td><?php echo $result['dname'];?></td>
<td><?php echo $result['date'];?></td>
<td><?php echo $result['time'];?></td>
<td><?php echo $result['pemail'];?></td>
<td><?php echo $result['pno'];?></td>

</tr>
<?php
}
?>

</table>
</body>
</html>
