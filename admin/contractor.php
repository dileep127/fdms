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
                              CONTRACTOR DETAILS <small></small>
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
                             CONTRACTOR DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
<form  name="form1" id="formID"  method="post" action="contractor_insert.php">
 
  <table width="423" height="400" border="0" align="center">
    <tr>
      <th width="324" scope="col"><div align="left">CONTRACTOR NAME</div></th>
      <th width="297" scope="col"><input name="contractor_name" type="text" id="contractor_name" size="50" align="left" class="validate[required] form-control" /></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">CONTRACTOR CODE </div></th>
      <td><input name="contractor_code" type="text" id="contractor_code" size="50" align="left" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ADRESS</div></th>
      <td><input name="contractor_adress" type="text" id="contractor_adress" size="50" align="left" class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">CITY</div></th>
      <td><input name="contractor_city" type="text" id="contractor_city" size="50" align="left" class="form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">EMAIL</div></th>
      <td><input name="contractor_email" type="text" id="contractor_email" size="50" align="left"  class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">CONTACT NUMBER </div></th>
      <td><input name="contractor_contact" type="text" id="contractor_contact" size="50" align="left" class="validate[required,custom[mobile]] form-control" /></td>
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
