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
                            MEMBERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="member.php" class="btn btn-primary">Add New Details</a><hr>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
         <th>MEMBER ID:</th>  
         <th>FAMILY ID:</th>
         <th>AGE:</th>
         <th>GENDER:</th>
         <th>RELATIONSHIP</th>
         <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody>
		
		<?php
	  $mem_id=1;
       include("db_connection.php");
      
       $sql="SELECT * FROM member m, family f where m.fam_id=f.fam_id";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		   <tr>
           <td> <?php echo $mem_id++;?></td>
           <td> <?php echo $row["fam_member_code"];?></td>
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
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           <?php include('footer.php');?>
          </body>
</html>
