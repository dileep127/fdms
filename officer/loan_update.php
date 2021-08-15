<?php
include("db_connection.php");


$loan_id =$_POST['loan_id'];
$loan_name =$_POST['loan_name'];
$loan_gdate =$_POST['loan_gdate'];
$loan_ammount =$_POST['loan_ammount'];
$loan_month =$_POST['loan_month'];
$loan_rpdate =$_POST['loan_rpdate'];
$loan_repdate =$_POST['loan_repdate'];
$loan_prinamt =$_POST['loan_prinamt'];
$loan_interest =$_POST['loan_interest'];
$loan_total =$_POST['loan_total'];
$loan_extra =$_POST['loan_extra'];
$loan_sign =$_POST['loan_sign'];



$sql=$conn->prepare("UPDATE loan SET loan_name=?,loan_gdate=?,loan_ammount=?,loan_month=?,loan_rpdate=?,loan_repdate=?,loan_prinamt=?,loan_interest=?,loan_total=?,loan_extra=?,loan_sign=? WHERE loan_id=?");
$sql->bind_param("sssssssssssi",$loan_name,$loan_gdate,$loan_ammount,$loan_month,$loan_rpdate,$loan_repdate,$loan_prinamt,$loan_interest,$loan_total,$loan_extra,$loan_sign,$loan_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='loan_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='loan_view.php';
    </script>";
}
?>