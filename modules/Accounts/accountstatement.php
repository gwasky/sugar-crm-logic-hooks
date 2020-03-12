<?php require_once('../Connections/sugar.php'); ?>

<?php require_once('../Connections/sugar.php'); ?>
<?php $tracker = $_SESSION['MM_Username']; ?>
<?php

mysql_select_db($database_sugar, $sugar);
$query_users = "SELECT user_name, first_name, last_name FROM users WHERE user_name = '$tracker'";
$users = mysql_query($query_users, $sugar) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);
 ?>
<?php require_once('../Connections/sugar.php'); 
	  require('control.php');
	  $statement = accountStatement($_REQUEST['parent_id'], $_POST['start_date'], $_POST['end_date']);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wimax Statement for Account Number <? echo $_REQUEST['parent_id']; ?></title>
<style type="text/css">
<!--
.style11 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #000000; font-weight: bold; }
.style15 {color: #000000}
.style16 {color: #061F7B}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href="../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<table width="100%" border="0" cellspacing="1">
  <tr>
    <td width="60%">
    <form id="statement_form" name="statement_form" method="post" action="payments.php">
    <input name="parent_id" type="hidden" value="<?php echo $_REQUEST['parent_id']; ?>" />
    </form></td>
  </tr>
  <tr>
    <td>
	<?php echo $statement; ?>	</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($users);
?>