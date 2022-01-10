<?php
session_start();
?>
<html>
	<head><title>First</title></head>
	<body>
<pre>		
<button><a href="one.php" style="text-decoration: none;">Home</a></button>                                   <button onclick="noBack()"><a href="logout.php" style="text-decoration: none;">Logout</a></button>
</pre>

								
</pre>
	</body>
</html>
<?php
$user=$_SESSION['user_id'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
echo "<pre>";
echo "<font color='red'><u>HISTORY TABLE</u></font><br><br>";
$result = mysql_query("SELECT * FROM history where user_id='$user'");
?>
<table class="table table-bordered table-condensed" border="-1">
	<tr>
		<th>Primary Key</th>
		<th>User Id</th>
		<th>History Time</th>
		<th>Content</th>
	</tr>
<?php
while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$id=$row[0];
   @$user_id=$row[1];
   @$hist_time=$row[2];
   @$content=$row[3];
   ?>
   <tr>
   	<td><?php echo @$id;?></td>
   	<td><?php echo @$user_id;?></td>
   	<td><?php echo @$hist_time;?></td>
   	<td><?php echo @$content;?></td>
   </tr>
   <?php
   
}
?>
</table>
<?php
echo "<font color='red'><u>GROUP BY USER TABLE</u></font><br><br>";
$result = mysql_query("SELECT * FROM grpby_user_tab where user_id='$user'");
?>
<table class="table table-bordered table-condensed" border="-1">
	<tr>
		<th>ID</th>
		<th>User Id</th>
		<th>Foreign Key</th>
		
	</tr>
<?php
while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$idd=$row[0];
   @$user_idd=$row[1];
   @$fk=$row[2];
  
   ?>
   <tr>
   	<td><?php echo @$idd;?></td>
   	<td><?php echo @$user_idd;?></td>
   	<td><?php echo @$fk;?></td>
    </tr>
   <?php
   
}
?>
</table>
<?php
echo "<font color='red'><u>GROUP BY TIME TABLE</u></font><br><br>";
$result = mysql_query("SELECT * FROM grpby_time_tab");
?>
<table class="table table-bordered table-condensed" border="-1">
	<tr>
		<th>ID</th>
		<th>Date</th>
		<th>Foreign Key</th>
		
	</tr>
<?php
while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$idds=$row[0];
   @$user_idds=$row[1];
   @$fks=$row[2];
  
   ?>
   <tr>
   	<td><?php echo @$idds;?></td>
   	<td><?php echo @$user_idds;?></td>
   	<td><?php echo @$fks;?></td>
    </tr>
   <?php
   
}
?>
</table>
<?php
echo "<font color='red'><u>GROUP BY USER AND TIME TABLE</u></font><br><br>";
$result = mysql_query("SELECT * FROM grpby_user_time where user_id='$user'");
?>
<table class="table table-bordered table-condensed" border="-1">
	<tr>
		<th>ID</th>
		<th>Date</th>
		<th>USER ID</th>
		<th>Foreign Key</th>
		
	</tr>
<?php
while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$idt=$row[0];
   @$dat=$row[1];
   @$usrid=$row[2];
   @$fkst=$row[3];
  
   ?>
   <tr>
   	<td><?php echo @$idt;?></td>
   	<td><?php echo @$dat;?></td>
   	<td><?php echo @$usrid;?></td>
   	<td><?php echo @$fkst;?></td>
    </tr>
   <?php
   
}
?>
</table>
<?php
echo "</pre>";
?>

<script type="text/javascript">
	window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>