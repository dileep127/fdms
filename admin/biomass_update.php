<?php
include("db_connection.php");
$bio_id=$_POST['bio_id'];
$bio_name =$_POST['bio_name'];
$bio_wood =$_POST['bio_wood'];
$bio_drylf =$_POST['bio_drylf'];
$bio_rawlf =$_POST['bio_rawlf'];
$bio_grass =$_POST['bio_grass'];
$bio_sign =$_POST['bio_sign'];



$sql=$conn->prepare("UPDATE biomass SET bio_name=?,bio_wood=?,bio_drylf=?,bio_rawlf=?,bio_grass=?,bio_sign=? WHERE bio_id=?");
$sql->bind_param("ssssssi",$bio_name,$bio_wood,$bio_drylf,$bio_rawlf,$bio_grass,$bio_sign,$bio_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='biomass_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='biomass_view.php';
    </script>";
}
?>