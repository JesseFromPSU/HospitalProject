<html>

<head>
<title>Delete Patient</title>
</head>

<body>

<?php

$patient_ID	= $_POST['patID'];

#connect to mysql
$conn = mysqli_connect("localhost", "2019doctor1", "2019doctor1", "2019doctor1");

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

$sql = "select patient_fname, patient_lname from doc1patient where patient_ID = '$patient_ID'";
$result = mysqli_query($conn, $sql);

WHILE ($row=mysqli_fetch_assoc($result))
{
  $firstname = $row["patient_fname"];
  $lastname = $row["patient_lname"];
}

if ($result)
{
print ("
<form method='post' action='deletePatients3.php'>
<div align='center'>
<center>

<table border='2' cellpadding='2' cellspacing='1'>
		<tr>
		  <td colspan='2'>
		    <font face='Ariel' size='3'>
		    <b>Delete Patient for patient ID "); print ($patient_ID); 

print("</b></font>
		  </td>
		</tr>
		<tr>
		  <td>
		    <b>Patient First Name:</b>
		  </td>
		  <td>
		    <input name='patient_fname' value = ' $firstname' "); print ($firstname); 

print (">
		  </td>
		</tr>
		<tr>
		  <td>
		    <b>Patient Last Name:</b>
		  </td>
		  <td>
		    <input name='patient_lname' value = $lastname "); print ($lastname); 

print (">
		  </td>
		</tr>
		<tr>
		  <td align='left'>
		    <input type='reset' value='Clear'>
		  </td>
		  <td align='right'>
		    <input type='submit' value ='Delete Patient'>
		  </td>
		</tr>
</table>
</center>

<input name='patID' type='hidden' value = '$patient_ID'>
</form> ");
}


?>
</body>
</html>
