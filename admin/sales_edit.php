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
                               SALES DETAILS <small></small>
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
                            SALES DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
      <?php
  include("db_connection.php");
    $sales_id=$_REQUEST['id'];
    $sql="SELECT * from sales WHERE sales_id='$sales_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>

   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="sales_update.php" method="post">
              
			    <table width="1006" height="571" border="0" align="center">
			   <tr>
			   <th width="266"> SALE ID</th>
              <td width="730">  <input type="text" name="sales_id" id="sales_id" value="<?php echo $row['sales_id'];?>" class="form-control"></td>
                </tr>
                     <tr>
                        <th>CONTRACTOR NAME</th>
                        <td><label>
                          <select name="contractor_id" size="1" id="contractor_id" class="form-control">
						   <option value="" >Select contractor</option>
						   
						    <?php
	  include('db_connection.php');
	  $sql1="select * from contractor";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['contractor_id']; ?>"><?php echo $row1['contractor_name']; ?> </option>
	  <?php
	  }
	  ?>
						   
						   
                          </select>
                        </label></td>
                    </tr>
                    <tr>
                        <th>TREE ID</th>
                        <td><select name="tree_id" size="1" id="tree_id" class="validate[required] form-control">
                          <option value="" >Select tree name</option>
                          <?php
	  include('db_connection.php');
	  $sql2="select * from trees";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
                          <option value="<?php echo $row2['tree_id']; ?>"><?php echo $row2['tree_name']; ?> </option>
                          <?php
	  }
	  ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>TREE STOCK</th>
                        <td><select name="tree_stock" size="1" id="tree_stock" class="form-control">
                          <option value="" >Select stock</option>
                          <?php
	  include('db_connection.php');
	  $sql3="select * from stock";
	  $res3=mysqli_query($conn,$sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	  ?>
                          <option value="<?php echo $row3['tree_stock']; ?>"><?php echo $row3['tree_stock']; ?> </option>
                          <?php
	  }
	  ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>SALE RATE</th>
                        <td><input type="text" id="sale_rate" name="sale_rate" value="<?php echo $row['sale_rate'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>SALE DATE</th>
                        <td><input type="date" id="sale_date" name="sale_date" value="<?php echo $row['sale_date'];?>" class="form-control"></td>
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
