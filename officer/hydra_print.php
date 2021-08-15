<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
 <script language="javascript1.2">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>
    
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                              HYDRA LOGICAL DETAILS <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		<div id="printableArea">
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             HYDRA LOGICAL DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
		<?php
  include("db_connection.php");
    $hydra_id=$_REQUEST['id'];
    $sql="SELECT * from hydra WHERE hydra_id='$hydra_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>					
   
        <center>
		<?php include('val.php'); ?>
            <form  id="formID" action="hydra_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" id="hydra_id" name="hydra_id" value="<?php echo $row['hydra_id'];?>" class=" form-control">
			 <table width="754" height="509" border="0" align="center">
              
               
               
                    <tr>
                        <th>TUBE-WELL NAME</th>
                        <td><input type="text" id="hydra_well" name="hydra_well" value="<?php echo $row['hydra_well'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>SECTOR</th>
                        <td><input type="text" id="hydra_sector" name="hydra_sector" value="<?php echo $row['hydra_sector'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;&nbsp;&nbsp;VILLAGE</td>
                        <td><input type="text" id="hydra_village" name="hydra_village" value="<?php echo $row['hydra_village'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <td><input type="date" id="hydra_date" name="hydra_date" value="<?php echo $row['hydra_date'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;&nbsp;BOREWELL DEPTH (meters)</td>
                        <td><input type="text" id="hydra_bore" name="hydra_bore" value="<?php echo $row['hydra_bore'];?>" class="validate[required] form-control"></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
					 <tr>
                        <th>WATER LEVEL (meter)</th>
                        <td><input type="text" id="hydra_level" name="hydra_level" value="<?php echo $row['hydra_level'];?>" class="validate[required] form-control"></td>
                        <td>&nbsp;&nbsp;&nbsp;WATER AMOUNT (inches)</td>
                        <td><input type="text" id="hydra_quantity" name="hydra_quantity" value="<?php echo $row['hydra_quantity'];?>" class="validate[required] form-control"></td>
				    </tr>
					 <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					
					 
					
     
                     <tr>
      <td height="66" colspan="4"><div align="center">Signature
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
					</div>
					<input type="button" onclick="printDiv('printableArea')" class="btn btn-success" value="PRINT!" />
                    <!-- /.panel --><?php include('footer.php');?>
					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
