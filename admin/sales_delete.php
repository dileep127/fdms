<?php
include_once("db_connection.php");
$sales_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM sales WHERE sales_id=?");
$sql->bind_param("i",$sales_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='sales_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='sales_view.php';
  </script>"; 
  
}
?>
