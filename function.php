<?
session_start();
mysql_connect("localhost","xtwitter","xtwitter");
mysql_select_db("xtwitter");

$_SESSION['lasterr'] = "";
$a=$_SESSION['loginuser'];
$result=mysql_query("SELECT * FROM users where username='$a'");
$result1=mysql_fetch_array($result);
$_SESSION['loginid'] =$result1['id'];
function checklogin() {
	if(!$_SESSION['loginuser'])
		header("Location: error.php");
}
?>