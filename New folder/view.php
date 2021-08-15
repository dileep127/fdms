<?php
include_once 'db_connection.php';
?>


<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$sql = "select * from complaint;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo $row['name and date'];
}
}
?>
</body>
</html>