<?php
include_once("db_connection.php");
$o_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM officer WHERE o_id=?");
$sql->bind_param("i",$o_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='officer_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='officer_view.php';
  </script>"; 
  
}
?>
