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
                               OFFICERS DETAILS <small></small>
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
                            OFFICERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
      <?php
  include("db_connection.php");
    $o_id=$_REQUEST['id'];
    $sql="SELECT * from officer WHERE o_id='$o_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>

   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="officer_update.php" method="post">
              
			    <table width="1006" height="571" border="0" align="center">
			   <tr>
			   <th width="266"> OFFICER NAME</th>
              <td width="730">  <input type="text" name="o_fullname" id="o_fullname" value="<?php echo $row['o_fullname'];?>" class="form-control"></td>
                </tr>
                    
                    <tr>
                        <th>OFFICER DESIGNATION</th>
                        <td><input type="text" id="o_designation" name="o_designation" value="<?php echo $row['o_designation'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>DATE OF BIRTH</th>
                        <td><input type="date" id="o_dob" name="o_dob" value="<?php echo $row['o_dob'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>GENDER</th>
                        <td><input type="text" id="o_gender" name="o_gender" value="<?php echo $row['o_gender'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>ADRESS</th>
                        <td><input type="text" id="o_adress" name="o_adress" value="<?php echo $row['o_adress'];?>" class="form-control"></td>
                    </tr>
					 <tr>
                        <th>OFFICER CODE</th>
                        <td><input type="text" id="o_code" name="o_code" value="<?php echo $row['o_code'];?>" class="form-control"></td>
                    </tr>
					<tr>
                        <th>CONTACT NUMBER</th>
                        <td><input type="text" id="o_contact" name="o_contact" value="<?php echo $row['o_contact'];?>" class="form-control"></td>
                    </tr>
					<tr>
                        <th>EMAIL ID</th>
                        <td><input type="text" id="o_email" name="o_email" value="<?php echo $row['o_email'];?>" class="form-control"></td>
                    </tr>
					<tr>
                        <th>OFFICER PHOTO</th>
                        <td><input type="file" id="o_photo" name="o_photo" value="<?php echo $row['o_photo'];?>" class="form-control"></td>
                    </tr>
     
                    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
       
         
          <input type="reset" name="Submit3" value="Reset"  class="btn btn-danger">
        </div> </td>
		</tr>
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
