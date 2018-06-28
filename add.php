<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php 
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$no = mysqli_real_escape_string($mysqli, $_POST['no']);
		
		if(empty($name) || empty($no)) {
				
		if(empty($no)) {
			echo "<font color='red'>no field is empty.</font><br/>";
		}
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
				
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO add(nomer, nama) VALUES('$no','$name')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
