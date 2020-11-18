<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
$database_conn='albutana';
$conn = mysqli_connect('localhost', 'root', '') or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_select_db($conn,$database_conn); 
mysqli_set_charset($conn,"utf8");

$status=1;
if(isset($_GET['id'])){
$stdid=$_GET['id'];
}
if (isset($_GET['stdid'])) {

  $insertSQL = sprintf("INSERT INTO alkhartoum  (stdid,std_Name,department,regstatus ) VALUES ( %s, %s, %s, %s)",
							($_GET['stdid']),
							GetSQLValueString($_GET['name'],"text"),
							GetSQLValueString($_GET['dept'],"text"),
							($status)
					       );
						   //print_r($insertSQL);
 $Result = mysqli_query($conn,$insertSQL) or die("<script>alert('الرجاء التأكد من الإدخال')</script>");
      // print_r($Result); 		var ss=
		//
      if($Result==1)
 {
echo "<script>
req=new XMLHttpRequest();
		req.open('POST', 'http://localhost/basheerAPI/public/api/student/'+$stdid+'?regstatus='+$status,true);	//Call url from server - push x value var req;			// Request variable
		req.setRequestHeader('authorization', 'Bearer 4mRn1esr6CVCbXK2umTYFHyUl3L32EaYdNlJRsHlkYwdYhrtbHK6sEiSFjIA'); //token header 
		req.send();		
		
alert('تم التسجيل بنجاح'); window.location = 'index.php'; 
</script>";
}}
mysqli_select_db($conn,$database_conn);
$q="select count(stdid)as alll,count(if(regstatus=1,regstatus,null)) as reg,department from alkhartoum group by department order by department ";
 $rm = mysqli_query($conn,$q) or die(mysqli_error($conn));
 
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta  charset="utf-8" />
</head>

<body>
<p>&nbsp;</p>
</body>
</html>
