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
                                FAMILY DETIALS <small></small>
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
                            FAMILY DETIALS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
		<?php
  include("db_connection.php");
    $fam_id=$_REQUEST['id'];
    $sql="SELECT * from family WHERE fam_id='$fam_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>							
    
        <center>
		<?php include('val.php');?>
            <form id="formID" action="family_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" id="fam_id" name="fam_id" value="<?php echo $row['fam_id'];?>" class="form-control">
              <table width="423" height="265" border="0" align="center">
               
               
                    <tr>
                        <th>FAMILY HEAD NAME</th>
                        <td><input type="text" id="fam_member_code" name="fam_member_code" value="<?php echo $row['fam_member_code'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>VILLAGE </th>
                        <td><input type="text" id="fam_village" name="fam_village" value="<?php echo $row['fam_village'];?>" class="validate[required] form-control"></td>
                    </tr>
                    
                  
					
     
                      <tr>
      <td height="82" colspan="2"><div align="center">
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