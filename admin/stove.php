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
                             BENEFICIARIES DETALS (bio stove) <small></small>
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
                          BENEFICIARIES DETALS (bio stove)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
<form name="formID" id="formID" method="post" action="stove_insert.php" >
 
  <table width="423" height="262" border="0" align="center">
    <tr>
      <th width="325" scope="col"><div align="left">BENEFICIARIES NAME </div></th>
      <th width="360" scope="col"><input name="stove_name" type="text" id="stove_name" size="60" class="validate[required] form-control"/></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">STOVE TYPE </div></th>
      <td><input name="stove_type" type="text" id="stove_type" size="60" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ISSUED DATE</div></th>
      <td><input name="stove_date" type="date" id="stove_date" size="60" class="validate[required,custom[date]] form-control"/></td>
    </tr>
    
 
   <tr>
      <td height="65" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
       
         
          <input type="reset" name="Submit3" value="Reset"  class="btn btn-danger">
        </div> </td>
		</tr
 ></table>
</form>

</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>                    <!-- /.panel --><?php include('footer.php');?>

					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>