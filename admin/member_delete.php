<?php
include_once("db_connection.php");
$mem_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM member WHERE mem_id=?");
$sql->bind_param("i",$mem_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='family.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='family_view.php';
  </script>"; 
  
}
?>
