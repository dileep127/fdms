<?php
include_once("db_connection.php");
$stove_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM stove WHERE stove_id=?");
$sql->bind_param("i",$stove_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='stove_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='stove_view.php';
  </script>"; 
  
}
?>
