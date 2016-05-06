<!DOCTYPE html>
<html>
  <html>
  <head>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <link href='style1.css' rel='stylesheet'>
 <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:hover {background-color: #f5f5f5; }
th {
    color: white;
}
</style>
  </head>
  <body>
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
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$sql = "INSERT INTO users(name,rollno,phoneno,email)
VALUES ('$name', '$rollno','$phoneno','$email')";
mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) { 
}
mysqli_close($conn);
?>

    <div class="menu" style="overflow-x:auto";>
      
      <!-- Menu icon -->
      <br>
      <br>
      <div  style="color:white; padding:20px;" class="icon-close" >
        BACK
      </div>
      <h2>MENU</h2>
<table>
  <tr>
    <th >NO.</th>
    <th>ITEM</th>
    <th>PRICE(RS.)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Tea Milk Lemon</td>
    <td>20.0</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Tea Black</td>
    <td>15.0</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Black Coffee</td>
    <td>30.0</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Brown</td>
    <td>$250</td>
  </tr>
</table>


    <!--Menu -->
     <!-- 
     <h1>Description<h1>

<h1>Rate
(Rs.)</h1><br>
<h3>Tea Milk Lemon (1 cup) 20.00</h3>
<h3>Tea Black (1 cup) 15.00<h3>
<h3>Black Coffee (1 cup)  30.00</h3>
<h3>Coffee with milk (1 cup)  40.00</h3>
<h3>Bed Tea Small (2 cups, 4 Biscuits)  60.00</h3>
<h3>Bed Tea  Large (3 cups, 6 Biscuits)  85.00</h3>
<h3>Small Flask tea (2 cup) 50.00</h3><br>
<h3>Big Flask tea (3 cup) 75.00</h3><br>
<h3>Bed Coffee  Small (2 cups, 4 Biscuits) 120.00</h3><br>
<h3>Bed Coffee  Large (3 cups, 6 Biscuits) 160.00</h3><br>
<h3>Small Flask Coffee (2 cup)  100.00</h3><br>
<h3>Big Flask Coffee (3 cup)  140.00</h3><br>
<h3>Boiled Milk (cup) 30.00</h3><br>
<h3>Boiled water (per flask)  20.00</h3><br>
<h3>Boiled drinking water (per bottle)  40.00</h3><br>-->
      
    </div>
   
  

    <!-- Main body -->
    <div class="jumbotron">
      <div class="icon-menu">
        <i class="fa fa-bars"></i>
        <a class="waves-effect waves-light btn" style="font-size:20px;"><i class="material-icons left"></i>MENU</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="waves-effect waves-light btn" style="font-size:20px;"><i class="material-icons left"></i>SIGN OUT</a>        
        <br />
        <br />
        <br /><br /><br /><br />
        <p>Enter next to order more</p><br>
        <p>Enter PlaceOrder for payment</p>
       <form action="ready.php" method="post">
       <input type="text" name="entry">
       <?php
       $servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";
static $p=0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

       $entry=$_POST['entry'];
       $sql="SELECT price from itemtable where itemid='$entry'";
      // $result = mysqli_query($conn, $sql);
       //$row = mysqli_fetch_assoc($result);
       $p=$p+$sql;
       ?>
       
        <br />
       <input type="reset" class="waves-effect waves-light btn" style="font-size:20px;"value="NEXT">&nbsp; &nbsp;
        <input type="submit"class="waves-effect waves-light btn" style="font-size:20px;" value="Place Order">
        </form>

      </div>
      <?php echo "$p";
      ?>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  </body>
</html>