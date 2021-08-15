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
                             TREE DETAILS <small></small>
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
                            TREE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
<form action="tree_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
 
 <table width="423" height="217" border="0" align="center">
    <tr>
      <th width="300" scope="col"><div align="left">TREE NAME </div></th>
      <th width="360" scope="col"><input name="tree_name" type="text" id="tree_name" size="60" class="validate[required] form-control"/></th>
    </tr>
    <tr>
      <th scope="row"><div align="justify">TREE DISCRIPTION </div></th>
      <td><input name="tree_discription" type="text" id="tree_discription" size="60"  class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="justify">IMAGE</div></th>
      <td><label>
        <input name="tree_photo" type="file" id="tree_photo"  class="form-control" />
      </label></td>
    </tr>

 <tr>
      <td height="63" colspan="2"><div align="center">
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
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>