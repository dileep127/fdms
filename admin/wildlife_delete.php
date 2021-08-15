<?php
include_once("db_connection.php");
$animal_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM wildlife WHERE animal_id=?");
$sql->bind_param("i",$animal_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='wildlife_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='wildlife_view.php';
  </script>"; 
  
}
?>
