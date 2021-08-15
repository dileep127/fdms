<?php
include('db_connection.php');

$hydra_well=$_POST['hydra_well'];
$hydra_sector=$_POST['hydra_sector'];
$hydra_village=$_POST['hydra_village'];
$hydra_date=$_POST['hydra_date'];
$hydra_bore=$_POST['hydra_bore'];
$hydra_level=$_POST['hydra_level'];
$hydra_quantity=$_POST['hydra_quantity'];
$hydra_sign=$_POST['hydra_sign'];


$sql = "INSERT INTO hydra VALUES (null,'$hydra_well','$hydra_sector','$hydra_village','$hydra_date','$hydra_bore','$hydra_level','$hydra_quantity','$hydra_sign')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="hydra_view.php";
</script>