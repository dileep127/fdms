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
                              OFFICER DETAILS <small></small>
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
                             OFFICER DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
		<?php
  include("db_connection.php");
    $o_id=$_REQUEST['id'];
	
	$uname=$_SESSION['uname'];
    $sql="SELECT * from officer WHERE o_email='$uname'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>		
   
        <center>
		<?php include('val.php'); ?>
            <form id="formID" action="officer_update.php" method="post" enctype="multipart/form-data">
               <table width="423" height="587" border="0" align="center">
                 <tr>
                        <th>ID</th>
                        <td><input type="text" id="o_id" readonly="" name="o_id" value="<?php echo $row['o_id'];?>" class="form-control" ></td>
                  </tr>
                    <tr>
                        <th>NAME</th>
                        <td><input type="text" id="o_fullname" name="o_fullname" value="<?php echo $row['o_fullname'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>DESIGNATION</th>
                        <td><input type="text" id="o_designation" name="o_designation" value="<?php echo $row['o_designation'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>DATE OF BIRTH</th>
                         <td><input type="date" id="o_dob" name="o_dob" value="<?php echo $row['o_dob'];?>" class="validate[required,custom[date]] form-control"></td>
                    </tr>
                    <tr>
                        <th>GENDER</th>
                        <td><input type="text" id="o_gender" name="o_gender" value="<?php echo $row['o_gender'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>ADRESS</th>
                        <td><input type="text" id="o_adress" name="o_adress" value="<?php echo $row['o_adress'];?>" class="form-control"></td>
                    </tr>
					 <tr>
                        <th>OFFICER CODE</th>
                        <td><input type="text" id="o_code" name="o_code" value="<?php echo $row['o_code'];?>" class="validate[required] form-control"></td>
                    </tr>
					 <tr>
                        <th>CONTACT</th>
                        <td><input type="text" id="o_contact" name="o_contact" value="<?php echo $row['o_contact'];?>" class="validate[required,custom[mobile]] form-control"></td>
                    </tr>
					 <tr>
                        <th>EMAIL</th>
                        <td>
						
						
						<input type="text" id="o_email" readonly="" name="o_email" value="<?php echo $row['o_email'];?>" class="form-control"></td>
                    </tr>
					 <tr>
                        <th>PHOTO</th>
                        <td><label>
						<img src="photo/<?php echo $row['o_photo'];?>" alt="no image" height="100" width="100">
                          <!-- <input name="o_photo" type="file" id="o_photo"  class="form-control"> -->
                        </label></td>
					 </tr>
					
    <!--  
                    <tr>
      <td height="75" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
       
         
          <input type="reset" name="Submit3" value="Reset"  class="btn btn-danger">
        </div> </td>
		</tr> -->
                </table>
          </form>
        </div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
