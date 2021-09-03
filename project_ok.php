<?php 
   include "db.php";
?>
<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'jychoi130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $Cid=$_POST['Cid'];
 $pid=$_POST['pid'];
 $pname=$_POST['pname'];
 $start=$_POST['start'];
 $end= $_POST['end'];
 $wage= $_POST['wage'];
 $Rid=$pid;
 $Did="choi";

 $sql = "insert into project (pid, pname, start, end, wage)";
 $sql = $sql. "values('$pid','$pname','$start','$end','$wage')";

 $sql1 = "insert into register (Rid, Cid, Pid, Did)";
 $sql1 = $sql. "values('$Rid','$Cid','$pid','$Did')";

 if($mysqli->query($sql)){
    
 }else{
  echo 'fail to insert sql';
  echo "<br><br><a href='index.php'>메인페이지로가기</a>";
 }

 if($mysqli->query($sql1)){
   echo "<script>location.href='index.php'</script>";
}else{
 echo $Rid;
 echo $Cid;
 echo $Did;
 echo $pid;
 echo 'fail to insert sql';
 echo "<br><br><a href='index.php'>메인페이지로가기</a>";
}
?>