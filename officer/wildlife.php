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
                               WILDLIFE DETAILS <small></small>
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
                           WILDLIFE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
<form action="wildlife_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
 
  <table width="565" height="292" border="0" align="center">
    <tr>
      <th width="170" height="23" scope="col"><div align="left">ANIMAL NAME </div></th>
      <th width="385" scope="col"><input name="animal_name" type="text" id="animal_name" value="" size="50" class="validate[required] form-control"/></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">ANIMAL CODE </div></th>
      <td><input name="animal_code" type="text" id="animal_code" value="" size="50" class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ANIMAL AGE GROUP </div></th>
      <td><input name="animal_age" type="text" id="animal_age" value="" size="50" class="form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">INFORMATION</div></th>
      <td><input name="animal_information" type="text" id="animal_information" value="" size="50" class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ANIMAL IMAGE </div></th>
      <td><label>
        <input name="animal_image" type="file" id="animal_image" class="form-control" />
      </label></td>
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
