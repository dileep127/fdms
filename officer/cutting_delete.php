<?php
include_once("db_connection.php");
$cutting_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM cutting WHERE cutting_id=?");
$sql->bind_param("i",$cutting_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='cutting_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='cutting_view.php';
  </script>"; 
  
}
?>
