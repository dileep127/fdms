<?php
include_once("db_connection.php");
$contractor_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM contractor WHERE contractor_id=?");
$sql->bind_param("i",$contractor_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='contractor_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='contractor_view.php';
  </script>"; 
  
}
?>
