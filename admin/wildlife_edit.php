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
                               ANIMALS DETAILS <small></small>
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
                            ANIMALS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
      <?php
  include("db_connection.php");
    $animal_id=$_REQUEST['id'];
    $sql="SELECT * from wildlife WHERE animal_id='$animal_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>

   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="wildlife_update.php" method="post">
              
			    <table width="1006" height="571" border="0" align="center">
			   <tr>
			   <th width="266"> ANIMAL ID</th>
              <td width="730">  <input type="text" name="animal_id" id="animal_id" value="<?php echo $row['animal_id'];?>" class="form-control"></td>
                </tr>
                    <tr>
                        <th>ANIMAL NAME</th>
                        <td><input type="text" id="animal_name" name="animal_name" value="<?php echo $row['animal_name'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>ANIMAL CODE</th>
                        <td><input type="text" id="animal_code" name="animal_code" value="<?php echo $row['animal_code'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>ANIMAL AGE GROUP</th>
                        <td><input type="text" id="animal_age" name="animal_age" value="<?php echo $row['animal_age'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>INFORMATION</th>
                        <td><input type="text" id="animal_information" name="animal_information" value="<?php echo $row['animal_information'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>ANIMAL IMAGE</th>
                        <td><input type="file" id="animal_image" name="animal_image" value="<?php echo $row['animal_image'];?>" class="form-control"></td>
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
