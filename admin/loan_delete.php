<?php
include_once("db_connection.php");
$loan_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM loan WHERE loan_id=?");
$sql->bind_param("i",$loan_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='loan_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='loan_view.php';
  </script>"; 
  
}
?>
