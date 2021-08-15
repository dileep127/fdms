<?php
include_once("db_connection.php");
$visit_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM visit WHERE visit_id=?");
$sql->bind_param("i",$visit_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='visit_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='visit_view.php';
  </script>"; 
  
}
?>
