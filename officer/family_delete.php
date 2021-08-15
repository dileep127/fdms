<?php
include_once("db_connection.php");
$fam_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM family WHERE fam_id=?");
$sql->bind_param("i",$fam_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='family_view.php';
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
