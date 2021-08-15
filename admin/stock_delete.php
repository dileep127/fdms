<?php
include_once("db_connection.php");
$stock_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM stock WHERE stock_id=?");
$sql->bind_param("i",$stock_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='stock_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='stock_view.php';
  </script>"; 
  
}
?>
