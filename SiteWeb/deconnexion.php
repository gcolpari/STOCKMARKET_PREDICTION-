<?php
	session_start();
	session_unset();
	session_destroy();
?>
<html>

<head>
<?php
	echo '<meta http-equiv="refresh" content="0;index.php"/>';
	exit();
?>
</head>

</html>