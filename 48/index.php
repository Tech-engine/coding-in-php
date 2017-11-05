<?php

/*

-----  __   __  .     __   __   __  .  __   __
  |   /__) /  ` |__  /__) `  \ / _  | `  \ /__)
  |   \__, \__, |  | \__, |  / \__/ | |  / \__, 

*/
// MYSQL SELECT Statements Practice

// WHERE, BETWEEN, LIKE, IN

// Step 1 : connecting to database
$con = mysqli_connect('localhost','root','','phpseries');

//Step 2 : checking if any error occured in connection
if(!$con) {
	die("Some error occurred during connection " . mysqli_connect_error());
}else {
	echo "Successfully connected to database<br>";
}

// Step 3 : writing query
$sql_query = "SELECT * FROM user WHERE name IN ('pankaj','amit')";

// Step 4 : Execute or run query
$result = mysqli_query($con, $sql_query); // result array is outputed

// Step 5: use the result
$final_arr = array();
while($res = mysqli_fetch_assoc($result)){
  array_push($final_arr, array(
  							"id"=>$res['id'],
  							"name"=>$res['name'],
  							"email"=>$res['email'],
  							"password"=>$res['password'],
  						)
  );
}

echo "<pre>",print_r($final_arr),"</pre>";

// Step 6 : closing connection
mysqli_close($con);
?>
