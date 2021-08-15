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
                               COMPLAINT DETAILS <small></small>
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
                            COMPLAINT DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
      <?php
  include("db_connection.php");
    $comp_id=$_REQUEST['id'];
    $sql="SELECT * from complaint WHERE comp_id='$comp_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>

   
        <center>
		<?php include('val.php');?>
            <form id="formID" action="complaint_update.php" method="post">
              
			    <table width="945" height="571" border="0" align="center">
			   <tr>
			   <th width="266"> COMPLAINT ID</th>
              <td width="730">  <input type="text" name="comp_id" id="comp_id" value="<?php echo $row['comp_id'];?>" class="form-control"></td>
                <td width="730">&nbsp;</td>
                <td width="730">&nbsp;</td>
			   </tr>
                    <tr>
                        <th>FIR NUMBER</th>
                        <td><input type="text" id="comp_firno" name="comp_firno" value="<?php echo $row['comp_firno'];?>" class="validate[required] form-control" ></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <td><input type="date" id="comp_date" name="comp_date" value="<?php echo $row['comp_date'];?>" class="validate[required,custom[date]] form-control" ></td>
                        <td>&nbsp;&nbsp;PLACE</td>
                        <td><input type="text" id="comp_place" name="comp_place" value="<?php echo $row['comp_place'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>ER NUMBER</th>
                        <td><input type="text" id="comp_erno" name="comp_erno" value="<?php echo $row['comp_erno'];?>" class="validate[required] form-control" ></td>
                        <td>&nbsp;&nbsp;CRIMINAL NAME</td>
                        <td><input type="text" id="comp_criminal_name" name="comp_criminal_name" value="<?php echo $row['comp_criminal_name'];?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
					 <tr>
                        <th>ITEM NAME</th>
                        <td><input type="text" id="comp_item" name="comp_item" value="<?php echo $row['comp_item'];?>" class="form-control"></td>
                        <td>&nbsp;&nbsp;QUANTITY IN NUMBER</td>
                        <td><input type="text" id="comp_item_in_no" name="comp_item_in_no" value="<?php echo $row['comp_item_in_no'];?>" class="form-control"></td>
				    </tr>
					 <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					 <tr>
                        <th>QUANTITY IN  KG/LITRER</th>
                        <td><input type="text" id="comp_item_in_kg" name="comp_item_in_kg" value="<?php echo $row['comp_item_in_kg'];?>" class="form-control"></td>
                        <td>&nbsp;&nbsp;QUANTITY IN METER</td>
                        <td><input type="text" id="comp_item_in_meter" name="comp_item_in_meter" value="<?php echo $row['comp_item_in_meter'];?>" class="form-control"></td>
				    </tr>
					 <tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					 <tr>
                        <th>DEPOSIT DETAILS</th>
                        <td><input type="text" id="comp_deposit" name="comp_deposit" value="<?php echo $row['comp_deposit'];?>" class="form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					 <tr>
                        <th>COMPLAINT STATUS</th>
                        <td><input type="text" id="comp_status" name="comp_status" value="<?php echo $row['comp_status'];?>" class="form-control"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
				    </tr>
					
     
                    <tr>
      <td colspan="4"><div align="center">
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
