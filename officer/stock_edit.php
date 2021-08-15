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
                              STOCK DETAILS <small></small>
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
                             STOCK DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $stock_id=$_REQUEST['id'];
    $sql="SELECT * from stock WHERE stock_id='stock_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>					
   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="stock_update.php" method="post">
			<table width="423" height="217" border="0" align="center">
               <tr>
                        <th> TREE STOCK</th>
                        <td><input type="text" id="stock_id" name="stock_id" value="<?php echo $row['stock_id'];?>" class=" form-control"></td>
                  </tr>
				 <tr>
                        <th> TREE NAME</th>
                        <td><label>
                          <select name="tree_id" size="1" id="tree_id" class="validate[required] form-control">
						   <option value="" >Select tree name</option>
						   
						    <?php
	  include('db_connection.php');
	  $sql1="select * from trees";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['tree_id']; ?>"><?php echo $row1['tree_name']; ?> </option>
	  <?php
	  }
	  ?>
						   
                          </select>
                        </label></td>
				 </tr>
                    <tr>
                        <th> TREE STOCK</th>
                        <td><input type="text" id="tree_stock" name="tree_stock" value="<?php echo $row['tree_stock'];?>" class="validate[required] form-control"></td>
                    </tr>
                   
					
					
     
                    <tr>
      <td height="62" colspan="2"><div align="center">
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