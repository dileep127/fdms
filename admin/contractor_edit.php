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
                               CONTRACTOR DETAILS <small></small>
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
                            CONTRACTOR DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
      <?php
  include("db_connection.php");
    $contractor_id=$_REQUEST['id'];
    $sql="SELECT * from contractor WHERE contractor_id='$contractor_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>

   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="contractor_update.php" method="post">
              
			    <table width="1006" height="571" border="0" align="center">
			   <tr>
			   <th width="266"> CONTRACTOR ID</th>
              <td width="730">  <input type="text" name="contractor_id" id="contractor_id" value="<?php echo $row['contractor_id'];?>" class="form-control"></td>
                </tr>
                    <tr>
                        <th>CONTRACTOR NAME</th>
                        <td><input type="text" id="contractor_name" name="contractor_name" value="<?php echo $row['contractor_name'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>CONTRACTOR CODE</th>
                        <td><input type="text" id="contractor_code" name="contractor_code" value="<?php echo $row['contractor_code'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>ADRESS</th>
                        <td><input type="text" id="contractor_adress" name="contractor_adress" value="<?php echo $row['contractor_adress'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>CITY</th>
                        <td><input type="text" id="contractor_city" name="contractor_city" value="<?php echo $row['contractor_city'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>EMAIL</th>
                        <td><input type="text" id="contractor_email" name="contractor_email" value="<?php echo $row['contractor_email'];?>" class="form-control"></td>
                    </tr>
					 <tr>
                        <th>CONTACT NUMBER</th>
                        <td><input type="text" id="contractor_contact" name="contractor_contact" value="<?php echo $row['contractor_contact'];?>" class="form-control"></td>
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
