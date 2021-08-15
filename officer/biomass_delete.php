<?php
include_once("db_connection.php");
$bio_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM biomass WHERE bio_id=?");
$sql->bind_param("i",$bio_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='biomass_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='biomass_view.php';
  </script>"; 
  
}
?>
