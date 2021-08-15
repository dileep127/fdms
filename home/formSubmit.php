<?php 
include('db_connect.php');

$e_name=$_POST['e_name'];
$e_last=$_POST['e_last'];
$e_mail=$_POST['e_mail'];
$e_phone=$_POST['e_phone'];
$e_alternative_phone=$_POST['e_alternative_phone'];
$e_arrival_date=$_POST['e_arrival_date'];
$e_departure_date=$_POST['e_departure_date'];
$e_number_of_person=$_POST['e_number_of_person'];
$e_describe=$_POST['e_describe'];


echo $sql="insert into enquiry_form values(null,'$e_name','$e_last','$e_mail','$e_phone','$e_alternative_phone','$e_arrival_date','$e_departure_date','$e_number_of_person','$e_describe')";

mysqli_query($conn,$sql);

?>
<script>
alert("form Is Submited Successfuly... ");
window.location.reload();
document.location="index.php";
</script>