
<?php
echo "<title>USER_MANAGMENT</title>";

$SERVER_NAME="localhost";
$SERVER_USERNAME="id7631548_naeem";
$SERVER_PASSWORD="naeem";
$SERVER_DATABASE="id7631548_xmessage";
$HOST_NAME="NONE";
$HOST_PIN="NONE";
$HOST_CLASS="NONE";

$SERVER_CONN=mysql_connect($SERVER_NAME,$SERVER_USERNAME,$SERVER_PASSWORD,$SERVER_DATABASE);

	if(!$SERVER_CONN){
		die("Could Not Connect".mysql_errno());
	}
	$db_test=mysql_select_db($SERVER_DATABASE,$SERVER_CONN);
  if(!$db_test){
  	die("Could not connect".mysql_error());
  }
if(isset($_POST['fname'])&& isset($_POST['fpin'])){
	$HOST_NAME=$_POST['fname'];
	$HOST_PASSWORD=$_POST['fpin'];

}
if(	$HOST_NAME=="" ||	$HOST_PASSWORD==""){
  Die("No Value Given");
}


	$SQL="UPDATE admin SET pin='".$HOST_PASSWORD."',id='".$HOST_NAME."' WHERE username=0";
	$SQL_UPDATE=mysql_query($SQL,$SERVER_CONN);
	if(!$SQL_UPDATE){

		die("Unable To Update".mysql_error());

	}
	else{
		echo("Data Updated");
		echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
	}
	?>
<body>
</body>
</html>
