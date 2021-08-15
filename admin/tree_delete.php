<?php
include_once("db_connection.php");
$tree_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM trees WHERE tree_id=?");
$sql->bind_param("i",$tree_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='tree_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='tree_view.php';
  </script>"; 
  
}
?>
