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
                               MEMBERS DETAILS <small></small>
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
                             MEMBERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $mem_id=$_REQUEST['id'];
    $sql="SELECT * from member WHERE mem_id='$mem_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>				
   
        <center>
		<?php include('val.php'); ?>
            <form id="formID" action="member_update.php" method="post">
			<input type="hidden" id="mem_id" name="mem_id" value="<?php echo $row['mem_id'];?>" class="form-control">
			 <table width="423" height="400" border="0" align="center">
                
                    <tr>
                        <th>FAMILY NAME</th>
                        <td><select id="fam_id" name="fam_id" value="<?php echo $row['fam_id'];?>" class="validate[required] form-control">
						<option value="" >Select family</option>
						  <?php
	  include('db_connection.php');
	  $sql1="select * from family";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
           <option value="<?php echo $row1['fam_id'];?>" <?php if($row1['fam_id']==$row['fam_id']) { ?> selected <?php } ?>><?php echo $row1['fam_member_code'];?> </option>
           <?php
	  }
	  ?>
				</SELECT>		
						
						</td>
                    </tr>
                    <tr>
                      <th>MEMBER NAME </th>
                      <td><input type="text" id="mem_name" name="mem_name" value="<?php echo $row['member_name'];?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>AGE</th>
                        <td><input type="text" id="mem_age" name="mem_age" value="<?php echo $row['mem_age'];?>" class="form-control"></td>
                    </tr>
                   
                    <tr>
                        <th>GENDER</th>
                        <td><input type="text" id="mem_gender" name="mem_gender" value="<?php echo $row['mem_gender'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>RELATIONSHIP</th>
                        <td><input type="text" id="mem_relation" name="mem_relation" value="<?php echo $row['mem_relation'];?>" class="form-control"></td>
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
