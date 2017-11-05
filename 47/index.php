<?php
// MYSQL Statements Practice

/* SELECT - used to select a row or multiple rows from a table 
            based on some particular criteria */

// Step 1 : connecting to database
$con = mysqli_connect('localhost','root','','phpseries');

//Step 2 : checking if any error occured in connection
if(!$con) {
	die("Some error occurred during connection " . mysqli_connect_error());
}else {
	echo "Successfully connected to database<br>";
}

// Step 3 : writing query
$sql_query = "SELECT * FROM user";

// Step 4 : Execute or run query
$result = mysqli_query($con, $sql_query); // result array is outputed

// Step 5: use the result
while($res = mysqli_fetch_assoc($result)){
  echo $res["id"]."-".$res["name"]."-".$res["email"]."-".$res["password"];
  echo "<br>";
}

// Step 6 : closing connection
mysqli_close($con);
?>

/*
-----  __   __  .     __   __   __  .  __   __
  |   /__) /  ` |__  /__) `  \ / _  | `  \ /__)
  |   \__, \__, |  | \__, |  / \__/ | |  / \__, 
  
  */