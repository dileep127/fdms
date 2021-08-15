



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN.HTML</title>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center" class="style1">FOREST DEPARTMENT MANAGEMENT SYSTEM  </div>
  <label></label>
</form>

<div align="center">
<div align="center">
  <div class="dropdown">
  <button class="dropbtn">VILLAGE FOREST COMMITTEE</button>
  <div class="dropdown-content">
  <a href="complaint.php">complaint details</a>
  <a href="admin_login.php">admin page</a>
  <a href="#">Link 3</a>
  </div>
</div></div>
<label></label>


</body>
</html>
