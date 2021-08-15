<?php
include("db_connection.php");
$sales_id =$_POST['sales_id'];
$contractor_id =$_POST['contractor_id'];
$tree_id =$_POST['tree_id'];
$tree_stock =$_POST['tree_stock'];
$sale_rate =$_POST['sale_rate'];
$sale_date =$_POST['sale_date'];


$sql=$conn->prepare("UPDATE sales SET contractor_id=?,tree_id=?,tree_stock=?,sale_rate=?,sale_date=? WHERE sales_id=?");
$sql->bind_param("iisssi",$contractor_id,$tree_id,$tree_stock,$sale_rate,$sale_date,$sales_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='sales_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='sales_view.php';
    </script>";
}
?>