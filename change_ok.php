<?php
    $Cid="";
    if( isset($_SESSION['Cid'])) $Cid= $_SESSION['Cid']; 
include "db.php";
include "password.php";

$Cpw = password_hash($_POST['Cpw'], PASSWORD_DEFAULT);
$Cname = $_POST['Cname'];
$Caddress = $_POST['Caddress'];
$Cphone = $_POST['Cphone'];

$sql = mq("update customer set Cpw='".$Cpw."', Cname='".$Cname."', Caddress='".$Caddress."',Cphone='".$Cphone."' where Cid='".$Cid."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

?>