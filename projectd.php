<?php 
   include "db.php";
   $Did="";
    if( isset($_SESSION['Did'])) $Did= $_SESSION['Did'];
?>
<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'sang130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 //$mysqli -> autocommit(FALSE);

 $pid=$_POST['id'];
 echo $pid;
 $mysqli -> query("UPDATE register SET Did=$Did WHERE pid=$pid");

// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}
else {
    echo $pid;
    echo $Did;
   //echo "<script>location.href='index.php'</script>";
}

$mysqli -> close();
?>
