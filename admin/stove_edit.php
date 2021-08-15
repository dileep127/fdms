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
                               BENEFICIARIES DETALS (bio stove) <small></small>
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
                               BENEFICIARIES DETALS (bio stove)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $stove_id=$_REQUEST['id'];
    $sql="SELECT * from stove WHERE stove_id='$stove_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>							
    
        <center>
		<?php include('val.php');?>
            <form  id="formID"action="stove_update.php" method="post" enctype="multipart/form-data">
			 <table width="423" height="291" border="0" align="center">
               <tr>
                        <th>STOVE ID</th>
                        <td><input type="text" id="stove_id" name="stove_id" value="<?php echo $row['stove_id'];?>" class=" form-control"></td>
                  </tr>
                    <tr>
                        <th>BENEFICIARIES NAME</th>
                        <td><input type="text" id="stove_name" name="stove_name" value="<?php echo $row['stove_name'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>STOVE TYPE </th>
                        <td><input type="text" id="stove_type" name="stove_type" value="<?php echo $row['stove_type'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>ISSUED DATE</th>
                        <td><input type="date" id="stove_date" name="stove_date" value="<?php echo $row['stove_date'];?>" class="validate[required,custom[date]] form-control"></td>
                    </tr>
                  
					
     
                    <tr>
      <td height="39" colspan="2"><div align="center">
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
