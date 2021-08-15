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
                              BIOMASS USAGE DETAILS<small></small>
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
                             BIOMASS USAGE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

    <?php
  include("db_connection.php");
    $bio_id=$_REQUEST['id'];
     $sql="SELECT * from biomass WHERE bio_id='$bio_id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res);
?>
       
		<?php include('val.php');?>
            <form  id="formID" action="biomass_update.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="bio_id" id="bio_id" value="<?php echo $row['bio_id'];?>" class="form-control">
			    <table width="752" height="400" border="0" align="center">
			   
                    <tr>
                        <th>FAMILY NAME</th>
                        <td><input type="text" id="bio_name" name="bio_name" value="<?php echo $row['bio_name'];?>" class="validate[required] form-control" ></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>WOOD USAGE(in tons)</th>
                        <td><input type="text" id="bio_wood" name="bio_wood" value="<?php echo $row['bio_wood'];?>" class="form-control"></td>
                        <td>&nbsp;&nbsp;DRY LEAVS</td>
                        <td><input type="text" id="bio_drylf" name="bio_drylf" value="<?php echo $row['bio_drylf'];?>" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>RAW LEAVS</th>
                        <td><input type="text" id="bio_rawlf" name="bio_rawlf" value="<?php echo $row['bio_rawlf'];?>" class="form-control" ></td>
                        <td>&nbsp;&nbsp;&nbsp;GRASS</td>
                        <td><input type="text" id="bio_grass" name="bio_grass" value="<?php echo $row['bio_grass'];?>" class="form-control"></td>
                    </tr>
					 <tr>
                        <th colspan="4"><p><br>
                        </p>
                        <p>                      SIGNATURE</p></th>
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



