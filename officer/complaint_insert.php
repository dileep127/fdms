<?php
include('db_connection.php');

$comp_firno=$_POST['comp_firno'];
$comp_date=$_POST['comp_date'];
$comp_place=$_POST['comp_place'];
$comp_erno=$_POST['comp_erno'];
$comp_criminal_name=$_POST['comp_criminal_name'];
$comp_item=$_POST['comp_item'];
$comp_item_in_no=$_POST['comp_item_in_no'];
$comp_item_in_kg=$_POST['comp_item_in_kg'];
$comp_item_in_meter=$_POST['comp_item_in_meter'];
$comp_deposit=$_POST['comp_deposit'];
$comp_status=$_POST['comp_status'];







$sql = "INSERT INTO complaint VALUES (null,'$comp_firno','$comp_date','$comp_place','$comp_erno','$comp_criminal_name','$comp_item','$comp_item_in_no','$comp_item_in_kg','$comp_item_in_meter','$comp_deposit','Active')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="complaint_view.php";
</script>