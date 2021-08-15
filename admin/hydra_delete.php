<?php
include_once("db_connection.php");
$hydra_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM hydra WHERE hydra_id=?");
$sql->bind_param("i",$hydra_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='hydra_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='hydra_view.php';
  </script>"; 
  
}
?>
