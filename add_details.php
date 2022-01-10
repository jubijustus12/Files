<?php
session_start();
include 'functions.php';
?>
<html>
<head>
	<title>ADD page</title>
</head>
<body><br>
  <?php echo "Hi ".get_user_name($_SESSION['user_id']);?><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
<br><br><br>

  <div class="container">
    
    <label for="uname"><b>Enter the data : </b></label>
    <input type="text" placeholder="Enter data" name="contents" required><br><br>

   

    <input type="submit">
    
  </div>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$user=$_SESSION['user_id'];
$contents = $_POST['contents'];

$on    =date('Y-m-d H:i:s');
$on_date    =date('Y-m-d');

$count_grpby_user=get_grpby_user($user);
$count_grpby_time=get_grpby_time();
$count_grpby_usertime=grpby_user_time($user);
 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
 $query = ("INSERT INTO history (user_id,hist_time,content,createdon) VALUES ('$user','$on','$contents','$on')");

if(mysql_query($query))
 {
$last_id = mysql_insert_id();

// echo "<script>alert('Successfully Inserted')</script>";
// header("location: one.php");
}
else
{
  echo "<script>alert('Insertion Failed')</script>";
header("location: one.php");
}
if($last_id!='' && $last_id!='0')
{
  if($count_grpby_user==0)
{
$query_gpu = ("INSERT INTO grpby_user_tab (user_id,value) VALUES ('$user','$last_id')");
$m_gpu=mysql_query($query_gpu);
}
if($count_grpby_time==0)
{
 $query_gpt = ("INSERT INTO grpby_time_tab (tim_date,value) VALUES ('$on_date','$last_id')");
$m_gpt=mysql_query($query_gpt); 
}
if($count_grpby_usertime==0)
{
  $query_gput = ("INSERT INTO grpby_user_time (dt_date,user_id,value) VALUES ('$on_date','$user','$last_id')");
$m_gput=mysql_query($query_gput);
}
header("location: one.php");
}
}
?>
</body>
</html>