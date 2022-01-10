<?php
session_start();
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <input type="submit">
    
  </div>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$uname = $_POST['uname'];
$pass = $_POST['psw'];	
  // echo "jubi testing here";exit;
 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
 // $sql = "SELECT * FROM login WHERE user_id='$uname' AND pass='$pass'";

$result1 = mysql_query("SELECT * FROM login where user_id='$uname' and pass='$pass'", $con);
$num_rows = mysql_num_rows($result1);
if($num_rows>0)
{
 $result = mysql_query("SELECT user_id,pass,ename FROM login where user_id='$uname' and pass='$pass'");

while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$uid=$row[0];
   @$ps=$row[1];  
   @$enm=$row[2];  
   $_SESSION['user_id']= @$uid;
   $_SESSION['ename']= @$enm;
   header("location: one.php");
}
mysql_free_result($result);
   }
   else
   {
   		echo "<script>alert('Login Failed')</script>";
   }





}
?>
</body>
</html>