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
                              BIOMASS USAGE Details <small></small>
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
                             BIOMASS USAGE Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								

<form name="formID" id="formID" method="post" action="biomass_insert.php">
 
     <table width="423" height="400" border="0" align="center">
    <tr>
      <th width="345" scope="col"><div align="left">FAMILY NAME </div></th>
      <th width="348" scope="col"><input name="bio_name" type="text" id="bio_name" size="60" class="validate[required] form-control" /></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">WOOD USAGE(in tons)</div></th>
      <td><input name="bio_wood" type="text" id="bio_wood" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">DRY LEAVS </div></th>
      <td><input name="bio_drylf" type="text" id="bio_drylf" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">RAW LEAVS </div></th>
      <td><input name="bio_rawlf" type="text" id="bio_rawlf" size="60" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">GRASS</div></th>
      <td><input name="bio_grass" type="text" id="bio_grass" size="60" class="validate[required] form-control"></td>
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
