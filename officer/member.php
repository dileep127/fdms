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
                              MEMBERS DETAILS<small></small>
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
                             MEMBERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								
<form name="formID" id="formID" method="post" action="member_insert.php">
 <table width="869" height="268" border="0" align="center">
    
   
      <tr>
        <th width="232" height="46" scope="col"><div align="left">FAMILY HEAD NAME / CODE</div></th>
        <th width="360" scope="col">
		 <div align="left">
		 <select name="fam_id" size="1" id="fam_id" class="validate[required] form-control">
           
           <?php
	  include('db_connection.php');
	  $id=$_REQUEST['id'];
	  $sql1="select * from family where fam_id='$id' ";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
           <option value="<?php echo $row1['fam_id'];?>"><?php echo $row1['fam_member_code'];?> </option>
           <?php
	  }
	  ?>
         </select>
		 </div>
		 <div align="left"><label>
	    <div align="left"></label></th>
        <th width="360" scope="col"><div align="center"></div></th>
        <th width="360" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="42" scope="row"><div align="left">MEMBER NAME </div></th>
        <td><input name="mem_name" type="text" id="mem_name" size="60" class="form-control"></td>
        <td><div align="center">AGE</div></td>
        <td><input name="mem_age" type="text" id="mem_age" size="60" class="form-control"></td>
      </tr>
      <tr>
        <th scope="row"><div align="left">GENDER</div></th>
        <td><input name="mem_gender" type="radio" value="Male">
          Male 
            <input name="mem_gender" type="radio" value="Female">
            Female</td>
        <td><div align="center">RELATIONSHIP</div></td>
        <td><input name="mem_relation" type="text" id="mem_relation" size="60" class="form-control"></td>
      </tr>
      <tr>
        <th scope="row"><div align="left"></div></th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit" class="btn btn-success">
          <input type="reset" name="Submit3" value="Reset"  class="btn btn-danger"></td>
      </tr>
   
   <tr>
      <td height="54" colspan="4"><div align="center">
          </div> </td>
		</tr>
    </table>
  </div>
</form>


 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
         <th>MEMBER ID:</th>  
         <th>FAMILY HEAD NAME:</th>
         <th>MEMBER NAME:</th>
		 <th>AGE:</th>
         <th>GENDER:</th>
         <th>RELATIONSHIP</th>
         <th>EDIT</th>
		 <th>DELETE</th> 
		</tr>
		</thead>
		<tbody>
		
		<?php
	  $mem_id=1;
       include("db_connection.php");
      
       $sql="SELECT * FROM member m, family f where m.fam_id=f.fam_id and m.fam_id=$id";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		   <tr>
           <td> <?php echo $mem_id++;?></td>
           <td> <?php echo $row["fam_member_code"];?></td>
		   <td> <?php echo $row["member_name"];?></td>
           <td> <?php echo $row["mem_age"];?></td>
           <td><?php echo $row["mem_gender"];?></td>
           <td> <?php echo $row["mem_relation"];?></td>
           <td>
		   <a href="member_edit.php?id=<?php echo $row["mem_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="member_delete.php?id=<?php echo $row["mem_id"]?>" class="btn btn-danger">DELETE </a>
			</td>
           
           
       </tr>
       <?php
       }
       ?>
   </tbody>
                                </table>
                
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
