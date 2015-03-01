<?php
//mysql server setup
$db_servername = "";
$db_username = "";
$db_password = "";
$db_name = "";

//check if dbconn.php is setup/configured
if ($db_servername == "" || $db_username == "" || $db_password == "" || $db_name == "") {
	echo "<div style='color:#990000; padding:12px; margin:12px; border:solid 1px #990000;'>Database connection is not set. Please edit the variables in db/dbconn.php to setup the connection string.</div>";
	exit();
}

//Global Vars - Edit values for your web site. leave as is in most cases.
$image_dir = "../uploads/"; //physical path to uploads folder
$image_url = "http://".$_SERVER['HTTP_HOST']."/uploads/"; //web path to uploads folder
$target_dir = $image_dir;


//Custom CSS file paths
$customCss_dir = '../css/custom.css'; //physical path to custom css file
$customCss_url = "http://".$_SERVER['HTTP_HOST']."/css/custom.css"; //web path to custom css file


//establish db connection 
$db_conn = mysql_connect($db_servername, $db_username, $db_password);
mysql_select_db($db_name, $db_conn);

//db connection is closed in includes/footer.php
?>