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
                            BIOMASS DETAILS <small></small>
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
                            BIOMASS DETAILS TABLES
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="biomass.php" class="btn btn-primary">Add New Details</a><hr>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
         <th>BIOMASS ID:</th>  
         <th>FAMILY NAME:</th>
         <th>WOOD USAGE(in tons):</th>
         <th>DRY LEAVS:</th>
         <th>RAW LEAV:</th>
         <th>GRASS:</th>
		 <th>Print:</th>
		 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody>        
         
 
       <?php  
       include("db_connection.php");
   
	   $sql="SELECT * FROM biomass";
	   $res=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
       <tr>
           <td> <?php echo $bio_id++;?></td>
           <td> <?php echo $row["bio_name"];?></td>
           <td> <?php echo $row["bio_wood"];?></td>
           <td><?php echo $row["bio_drylf"];?></td>
           <td> <?php echo $row["bio_rawlf"];?></td>
           <td> <?php echo $row["bio_grass"];?></td>
		     <td>
		   <a href="biomass_print.php?id=<?php echo $row["bio_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>
           <td>
		   <a href="biomass_edit.php?id=<?php echo $row["bio_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="biomass_delete.php?id=<?php echo $row["bio_id"]?>" class="btn btn-danger">DELETE </a>
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
