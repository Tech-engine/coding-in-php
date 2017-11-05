<?php

/*

-----  __   __  .     __   __   __  .  __   __
  |   /__) /  ` |__  /__) `  \ / _  | `  \ /__)
  |   \__, \__, |  | \__, |  / \__/ | |  / \__, 

*/
// MYSQL SELECT Statements Practice

// ORDER BY - Used to sort result in ascending or descending order

// Step 1 : connecting to database
$con = mysqli_connect('localhost','root','','phpseries');

//Step 2 : checking if any error occured in connection
if(!$con) {
	die("Some error occurred during connection " . mysqli_connect_error());
}else {
	echo "Successfully connected to database<br>";
}

// Step 3 : writing query
$sql_query = "SELECT * FROM customers ORDER BY country,CustomerName DESC";

// Step 4 : Execute or run query
$result = mysqli_query($con, $sql_query); // result array is outputed

// Step 5: use the result
$html = '<table>
            <thead>
              <th>CustomerID</th>
              <th>CustomerName</th>
              <th>ContactName</th>
              <th>Address</th>
              <th>City</th>
              <th>PostalCode</th>
              <th>Country</th>
            </thead>';
while($res = mysqli_fetch_assoc($result)){
  $html .="<tr>";
  $html .="<td>".$res['CustomerID']."</td>";
  $html .="<td>".$res['CustomerName']."</td>";
  $html .="<td>".$res['ContactName']."</td>";
  $html .="<td>".$res['Address']."</td>";
  $html .="<td>".$res['City']."</td>";
  $html .="<td>".$res['PostalCode']."</td>";
  $html .="<td>".$res['Country']."</td>";
  $html .="</tr>";

}
$html .="</table>";

echo $html;

// Step 6 : closing connection
mysqli_close($con);
?>

