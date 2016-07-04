 <html>
 <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="display.css"/>
 </head>
 <body>


 <?php
// define variables and set to empty values
$passa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $passa = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$user = 'root';
$pass = '';
$db = 'wmsiwt';

$connection = new mysqli ('localhost', $user, $pass, $db) or die("<p>Unable to connect.</p>");
echo "<p>Connected to the database succesfully.\n</p>";

$res=mysqli_query($connection,"SELECT*FROM admin");
$row =mysqli_fetch_array($res);
if($row["pass"] != $passa)
{
  echo "<p>The password is not correct.</p>";
}
else{

  echo"<p>You have entered the admin panel successfully.</p>";}

  if(isset($_GET['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
        
            $_id = $_GET['_id'];
            
            $sql = "DELETE FROM Feedback WHERE id = $_id" ;
            mysql_select_db('wmsiwt');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?><form method = "get" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100" style="font-family: 'Open Sans', sans-serif">ID</td>
                        <td><input name = "_id" type = "text" 
                           id = "_id"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" style="border:none;position:absolute;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif"  value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>


  
  

    <?php echo"<p>The current values in the database is as follows: </p> ";

      $connection = new mysqli ('localhost', $user, $pass, $db) or die("<p>Unable to connect.</p>");
      $res=mysqli_query($connection,"SELECT*FROM Feedback");

      echo "<table class = 'table' id='tables'";
        echo "<thead><tr><th>Id</th><th>Name</th><th>E-mail</th><th>Reason</th><th>Comment</th></tr></thead>";
        echo "<tbody>";
        while($row =mysqli_fetch_array($res) )
        {
          
            echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td><td>$row[reason]</td><td>$row[comment]</td></tr>" ;
          
        } 
        echo"</tbody>";
        echo "</table>";

    $connection->close();?>

         
               





 </body>
 </html> 

	