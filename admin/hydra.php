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
                             HYDRA LOGICAL STATUS <small></small>
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
                            HYDRA LOGICAL STATUS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
<form name="formID" id="formID" method="post" action="hydra_insert.php">
  <table width="423" height="400" border="0" align="center">

    <tr>
      <th width="350" scope="col"><div align="left">TUBE-WELL NAME </div></th>
      <th width="360" scope="col"><input name="hydra_well" type="text" id="hydra_well" size="60" class="validate[required] form-control" /></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">SECTOR</div></th>
      <td><input name="hydra_sector" type="text" id="hydra_sector" size="60" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">VILLAGE</div></th>
      <td><input name="hydra_village" type="text" id="hydra_village" size="60" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">DATE</div></th>
      <td><input name="hydra_date" type="date" id="hydra_date" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">BOREWELL DEPTH (meters) </div></th>
      <td><input name="hydra_bore" type="text" id="hydra_bore" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">WATER LEVEL (meter) </div></th>
      <td><input name="hydra_level" type="text" id="hydra_level" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">WATER AMOUNT (inches) </div></th>
      <td><input name="hydra_quantity" type="text" id="hydra_quantity" size="60" class="validate[required] form-control"></td>
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
