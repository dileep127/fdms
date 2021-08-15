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
                               TREE DETAILS <small></small>
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
                            TREE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $tree_id=$_REQUEST['id'];
    $sql="SELECT * from trees WHERE tree_id='tree_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>					
    
        <center>
		<?php include('val.php');?>
            <form  id="formID" action="tree_update.php" method="post" enctype="multipart/form-data">
			 <table width="423" height="254" border="0" align="center">
               <tr>
                        <th> TREE ID</th>
                        <td><input type="text" id="tree_id" name="tree_id" value="<?php echo $row['tree_id'];?>" class="form-control"></td>
                  </tr>
                    <tr>
                        <th> TREE NAME</th>
                        <td><input type="text" id="tree_name" name="tree_name" value="<?php echo $row['tree_name'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>TREE DISCRIPTION</th>
                        <td><input type="text" id="tree_discription" name="tree_discription" value="<?php echo $row['tree_discription'];?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>IMAGE</th>
                        <td><label>
                          <input name="tree_photo" type="file" id="tree_photo" class="form-control">
                        </label></td>
                    </tr>
                   
					
					
     
                     <tr>
      <td height="74" colspan="2"><div align="center">
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
