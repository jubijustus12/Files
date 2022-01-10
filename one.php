<?php
session_start();
?>
<html>
	<head><title>First</title></head>
	<body>
		<div  style="text-align: center;">
		<font color="red" size="16"><i>Welcome <?php echo $_SESSION['ename']."<br> YOUR ID IS : ".$_SESSION['user_id']; ?></i></font></div>
<pre>                                                                                                                       <button onclick="noBack()"><a href="logout.php" style="text-decoration: none;">Logout</a></button>





								<button><a href="add_details.php" style="text-decoration: none;">ADD DETAILS</a></button>


								<button><a href="view_details.php" style="text-decoration: none;">VIEW DETAILS</a></button>
</pre>
	</body>
</html>
<script type="text/javascript">
	window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>
