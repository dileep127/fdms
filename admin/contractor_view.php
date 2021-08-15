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
                           CONTRACTOR DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="contractor.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
										
         <th>CONTRACTOR ID:</th>  
         <th>CONTRACTOR NAME:</th>
         <th>CONTRACTOR CODE:</th>
         <th>ADRESS:</th>
         <th>CITY:</th>
         <th>EMAIL:</th>
		 <th>CONTACT NUMBER:</th> 
		 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		 <?php
	  $contractor_id=1;
       include("db_connection.php");
      
       $sql="select * from contractor";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		
		
       <tr>
           <td> <?php echo $contractor_id++;?></td>
           <td> <?php echo $row["contractor_name"];?></td>
           <td> <?php echo $row["contractor_code"];?></td>
           <td><?php echo $row["contractor_adress"];?></td>
           <td> <?php echo $row["contractor_city"];?></td>
           <td> <?php echo $row["contractor_email"];?></td>
		    <td> <?php echo $row["contractor_contact"];?></td>
			
		   
		   
		   
		   
		   
           
           <td>
		   <a href="contractor_edit.php?id=<?php echo $row["contractor_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="contractor_delete.php?id=<?php echo $row["contractor_id"]?>" class="btn btn-danger">DELETE </a>
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
