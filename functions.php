<?php

function get_user_name($uid)
{
	$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
	$result = mysql_query("SELECT ename FROM login where user_id='$uid'");

while ($row = mysql_fetch_array($result,MYSQL_NUM)) 
{
   @$e=$row[0];
   
}
return @$e;
}
function get_grpby_user($user)
{
	$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
	$result1 = mysql_query("SELECT * FROM grpby_user_tab where user_id='$user'", $con);
$num_rows = mysql_num_rows($result1);
return @$num_rows;
}
function get_grpby_time()
{
	$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
	$on    =date('Y-m-d');
	$result1 = mysql_query("SELECT * FROM grpby_time_tab where tim_date='$on'", $con);
$num_rows = mysql_num_rows($result1);
return @$num_rows;
}
function grpby_user_time($user)
{
	$con=mysql_connect("localhost","root","");
$db=mysql_select_db("stealth");
	 $on    =date('Y-m-d');
	
	 $result1 = mysql_query("SELECT * FROM grpby_user_time where dt_date='$on' and user_id='$user'", $con);
$num_rows = mysql_num_rows($result1);
return @$num_rows;
}
?>