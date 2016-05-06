<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        if($_POST['rollno']==$row['rollono']&&$row['password']==$row['password'])   // write the question name
        {
           $_SESSION["sesName"]= $_POST["user"];
          header('Location: menu1.php'); 
        }
        
    }
                 // header('Location: level1.php');
}
 else {
             
}
mysqli_close($conn);
?>
