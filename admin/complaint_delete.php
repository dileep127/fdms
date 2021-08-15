<?php
include_once("db_connection.php");
$comp_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM complaint WHERE comp_id=?");
$sql->bind_param("i",$comp_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='complaint_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='complaint_view.php';
  </script>"; 
  
}
?>
