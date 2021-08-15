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
                              VISITORS DETAILS <small></small>
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
                            VISITORS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
	<?php
  include("db_connection.php");
    $visit_id=$_REQUEST['id'];
    $sql="SELECT * from visit WHERE visit_id='$visit_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>							
   
        <center>
		<?php include('val.php'); ?>
            <form id="formID" action="visit_update.php" method="post" enctype="multipart/form-data">
			  <table width="423" height="293" border="0" align="center">
                <tr>
                        <th width="153"><div align="left">VISITOR ID</div></th>
                        <td width="260"><input type="text" id="visit_id" name="visit_id" value="<?php echo $row['visit_id'];?>" class="form-control" ></td>
                  </tr>
                    <tr>
                        <th><div align="left">VISITOR NAME</div></th>
                        <td><input type="text" id="visit_name" name="visit_name" value="<?php echo $row['visit_name'];?>" class="validate[required] form-control" ></td>
                    </tr>
                    <tr>
                        <th><div align="left">VISIT DATE</div></th>
                        <td><input type="date" id="visit_date" name="visit_date" value="<?php echo $row['visit_date'];?>" class="validate[required,custom[date]] form-control" ></td>
                    </tr>
                    <tr>
                        <th><div align="left">DISCRIPTION</div></th>
                        <td><input type="text" id="visit_discription" name="visit_discription" value="<?php echo $row['visit_discription'];?>" class="validate[required] form-control" ></td>
                    </tr>
                   
					
					
					
     <tr>
      <td colspan="2"><div align="center">
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
