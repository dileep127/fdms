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
                               COMPLAINT DETAILS <small></small>
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
                            COMPLAINT DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<form name="formID" id="formID" method="post" action="complaint_insert.php">
  
  <table width="686" height="624" border="0" align="center">
    <tr>
      <th width="256" scope="col"><div align="left">FIR NUMBER </div></th>
      <th width="420" scope="col"><input name="comp_firno" type="text" id="comp_firno" size="70" class="validate[required,custom[onlyNumber]] form-control" /></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">COMPLAINT DATE </div></th>
      <td><input name="comp_date" type="date" id="comp_date" size="70" class="validate[required,custom[date]] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">PLACE</div></th>
      <td><input name="comp_place" type="text" id="comp_place" size="70" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ER NUMBER </div></th>
      <td><input name="comp_erno" type="text" id="comp_erno" size="70" class="validate[required,custom[onlyNumber]] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">CRIMINAL NAME </div></th>
      <td><input name="comp_criminal_name" type="text" id="comp_criminal_name" size="70" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ITEM NAME </div></th>
      <td><input name="comp_item" type="text" id="comp_item" size="70" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ITEM IN NUMBERS </div></th>
      <td><input name="comp_item_in_no" type="text" id="comp_item_in_no" size="70" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ITEM IN KG'S </div></th>
      <td><input name="comp_item_in_kg" type="text" id="comp_item_in_kg" size="70" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ITEM IN METERS </div></th>
      <td><input name="comp_item_in_meter" type="text" id="comp_item_in_meter" size="70" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">DEPOSIT DETAILS </div></th>
      <td><input name="comp_deposit" type="text" id="comp_deposit" size="70" class="form-control"></td>
    </tr>
   
	
 <tr>
      <td height="26" colspan="2"><div align="center">
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
