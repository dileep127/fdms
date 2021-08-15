
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
    
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Change Password <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Change Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<form name="form1" method="post" id="formID" action="changepassword.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163">Old Password*</td>
      <td width="328"><input name="old_password" type="password" id="old_pwd" required="1" /></td>
    </tr>
    <tr>
      <td>New Password* </td>
      <td><input name="new_password" type="password" id="new_password" required="1" /></td>
    </tr>
    <tr>
      <td>Confirm Password* </td>
      <td><input name="confirm_password" type="password" id="con_pwd" required="1" /></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
 