 <html>
 <head>
   <link rel="stylesheet" type="text/css" href="display.css"/>
 </head>
 <body>


 <?php
// define variables and set to empty values
$name = $mail = $reason = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $mail = test_input($_POST["mail"]);
  $reason = test_input($_POST["reason"]);
  $comment = test_input($_POST["comment"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div>
  <h2 id="dark">This is the display page.</h2>
  <p id="info">
  <span id="dark">Name: </span><?php echo $name; ?><br>
  <span id="dark">E-mail: </span> <?php echo $mail; ?><br>
  <span id="dark">Reason: </span> <?php echo $reason; ?><br>
  <span id="dark">Comment: </span>  <?php echo $comment; ?><br><br><br>
</p>
</div>



 <?php

$user = 'root';
$pass = '';
$db = 'wmsiwt';

$connection = new mysqli ('localhost', $user, $pass, $db) or die("<p>Unable to connect.</p>");
//$link=mysqli_connect("localhost", "root", "", "wmsiwt");

echo "<p>Connected to the database succesfully.</p>";

/*$sql = "CREATE TABLE  Feedback(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50),
email VARCHAR(50) NOT NULL,
reason VARCHAR(30) NOT NULL,
comment VARCHAR(1000) NOT NULL)";

if ($connection->query($sql) === TRUE) {
    echo "Table Feedback has been succesfully created ";
} else {
    echo "Error creating table: " . $connection->error;
}*/



$sql = "INSERT INTO Feedback (name, email, reason, comment)
VALUES ('$name', '$mail', '$reason', '$comment')";

if ($connection->query($sql) === TRUE) {
    echo "<p>New record created successfully.</p>";
} else {
    echo "<p>Error:</p> " . $sql . "<br>" . $connection->error;
}



    
$delete = "DELETE FROM Feedback WHERE email='steven@pat.rick'";

if ($connection->query($delete) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connection->error;
}



$connection->close();

?>




 </body>
 </html> 