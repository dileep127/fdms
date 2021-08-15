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
                              VISITORS DETAILS <small></small>
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
                             VISITORS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
<form name="formID" id="formID" method="post" action="visit_insert.php">
 
  <table width="633" height="255" border="0" align="center">
    <tr>
      <th width="137" scope="col"><div align="left">VISITOR NAME </div></th>
      <th width="486" scope="col"><div align="left">
        <input name="visit_name" type="text" id="visit_name" size="50" class="validate[required] form-control">
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">VISIT DATE </div></th>
      <td><input name="visit_date" type="date" id="visit_date" size="50" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left"> DISCRIPTION </div></th>
      <td><input name="visit_discription" type="text" id="visit_discription" size="50" class="validate[required] form-control"></td>
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
