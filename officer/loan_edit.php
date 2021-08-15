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
                              LOAN DETAILS <small></small>
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
                            LOAN DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $loan_id=$_REQUEST['id'];
    $sql="SELECT * from loan WHERE loan_id='$loan_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>					
   
        <center>
		<?php include('val.php'); ?>
            <form id="formID" action="loan_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" id="loan_id" name="loan_id" value="<?php echo $row['loan_id'];?>" class="form-control">
                <table width="739" height="551" border="0" align="center">
              
                    <tr>
                        <th>DEBTOR NAME </th>
                        <td><input type="text" id="loan_name" name="loan_name" value="<?php echo $row['loan_name'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>LOAN GIVEN DATE</th>
                        <td><input type="date" id="loan_gdate" name="loan_gdate" value="<?php echo $row['loan_gdate'];?>" class="validate[required,custom[date]] form-control"></td>
                        <td>&nbsp;&nbsp;MONTH</td>
                        <td><input type="text" id="loan_month" name="loan_month" value="<?php echo $row['loan_month'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>LOAN AMMOUNT</th>
					 <td><input type="text" id="loan_ammount" name="loan_ammount" value="<?php echo $row['loan_ammount'];?>" class="validate[required] form-control"></td>            
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                  </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>RE-PAYMENT DATE</th>
                        <td><input type="date" id="loan_rpdate" name="loan_rpdate" value="<?php echo $row['loan_rpdate'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;&nbsp;DATE OF RE-PAYMENT</td>
                        <td><input type="date" id="loan_repdate" name="loan_repdate" value="<?php echo $row['loan_repdate'];?>" class="validate[required] form-control"></td>
                    </tr>
					 <tr>
                        <th>PRINCIPAL AMMOUNT</th>
                        <td><input type="text" id="loan_prinamt" name="loan_prinamt" value="<?php echo $row['loan_prinamt'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;&nbsp;INTEREST</td>
                        <td><input type="text" id="loan_interest" name="loan_interest" value="<?php echo $row['loan_interest'];?>" class="validate[required] form-control"></td>
				    </tr>
					 <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					
					 <tr>
                        <th>TOTAL AMMOUNT</th>
                        <td><input type="text" id="loan_total" name="loan_total" value="<?php echo $row['loan_total'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					
					 <tr>
                        <th>EXTRA PAYMENT</th>
                        <td><input type="text" id="loan_extra" name="loan_extra" value="<?php echo $row['loan_extra'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					
					
					
					
     
                    <tr>
      <td height="60" colspan="4"><div align="center">
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
