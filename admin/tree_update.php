<?php
include("db_connection.php");
$tree_id=$_POST['tree_id'];
$tree_name=$_POST['tree_name'];
$tree_discription=$_POST['tree_discription'];


$tree_photo=$_FILES['tree_photo']['name'];
$tmp_location=$_FILES['tree_photo']['tmp_name'];
$target="photo/".$tree_photo;
move_uploaded_file($tmp_location,$target);




$sql=$conn->prepare("UPDATE trees SET tree_name=?,tree_discription=?,tree_photo=? WHERE tree_id=?");
$sql->bind_param("sssi",$tree_name,$tree_discription,$tree_photo,$tree_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='tree_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='tree_view.php';
    </script>";
}
?>