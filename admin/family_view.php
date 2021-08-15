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
                             FAMILY DETAILS <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Tables</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           FAMILY DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="family.php" class="btn btn-primary">Add New Details</a><hr>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
	   <th>FAMILY ID:</th>
         <th>FAMILY HEAD NAME / CODE</th>  
         <th>VILLAGE:</th>
         <th>ADD NEW MEMBER</th>
		 <th>PRINT</th>
		 <th>EDIT</th>
		 <th>DELETE</th> 
		</tr>
		</thead>
		<tbody>

       </tr>
       <?php
       include("db_connection.php");
       $fam_id=1;
       
	   $sql="SELECT * FROM family";
	   $res=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
         
      
      
       <tr>
           <td> <?php echo $fam_id++;?></td>
           <td> <?php echo $row["fam_member_code"];?></td>
           <td> <?php echo $row["fam_village"];?></td>
             <td>
		   <a href="member.php?id=<?php echo $row["fam_id"]?>" class="btn btn-primary"> ADD NEW MEMBER</a>
		   </td>
		   <td>
		   <a href="member_print.php?id=<?php echo $row["fam_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>
		  
           <td>
		   <a href="family_edit.php?id=<?php echo $row["fam_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="family_delete.php?id=<?php echo $row["fam_id"]?>" class="btn btn-danger">DELETE </a>
			</td>
           
           
       </tr>
       <?php
       }
       ?>
  </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           <?php include('footer.php');?>
          </body>
</html>
