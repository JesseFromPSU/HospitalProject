<html>

<head>
<title>Delete Patient</title>
</head>

<body>

<?php
$patient_ID	= $_POST['patID'];
$firstname	= $_POST['patient_fname'];
$lastname	= $_POST['patient_lname'];

#connect to mysql
$conn = mysqli_connect("localhost", "2019doctor1", "2019doctor1", "2019doctor1");

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}
$sql = "delete from dco1patient where patient_ID = '$patient_ID'";
$result = mysqli_query($conn, $sql);

print ("

<center>
<table width='600' cellpadding='4' cellspacing='0'>
	<tr>
	  <td align='center'>
	    The patient <b> " . $firstname . " " . $lastname . "</b> has been deleted from the database
	  </td>
	</tr>
</table>
</center>

");

?>
</body>
</html>