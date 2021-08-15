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
                              OFFICER DETAILS <small></small>
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
                             OFFICER DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  <form action="officer_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
                                   <table width="423" height="527" border="0" align="center">

    <tr>
      <th width="277" scope="row"><div align="left">OFFICER NAME </div></th>
      <td width="300">
        <input name="o_fullname" type="text" id="o_fullname" size="50" class="validate[required] form-control"/>
      </td>
    </tr>
    <tr>
      <th scope="row"><div align="left">OFFICER DESIGNATION </div></th>
      <td><input name="o_designation" type="text" id="o_designation" size="50" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">DATE OF BIRTH </div></th>
      <td><input name="o_dob" type="date" id="o_dob" size="50" class="validate[required,custom[date]] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">GENDER</div></th>
      <td><input name="o_gender" type="text" id="o_gender" size="50" class="validate[required] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ADRESS</div></th>
      <td><input name="o_adress" type="text" id="o_adress" size="50"  class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">OFFICER CODE </div></th>
      <td><input name="o_code" type="text" id="o_code" size="50" class="validate[required] form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">CONTACT NUMBER </div></th>
      <td><input name="o_contact" type="text" id="o_contact" size="50" class="validate[required,custom[mobile]] form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">EMAIL ID </div></th>
      <td><input name="o_email" type="text" id="o_email" size="50" class="form-control" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">OFFICER PHOTO </div></th>
      <td><label>
        <input name="o_photo" type="file" id="o_photo"  class="form-control"/>
      </label></td>
    </tr>
 
 <tr>
      <td height="76" colspan="2"><div align="center">
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
