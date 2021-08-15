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
                            HYDRA LOGICAL DETAILS <small></small>
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
                            HYDRA LOGICAL DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="hydra.php" class="btn btn-primary">Add New Details</a><hr>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
         <th>HYDRALOGICAL ID:</th>  
         <th>TUBE-WELL NAME :</th>
         <th>SECTOR:</th>
         <th>VILLAGE:</th>
         <th>DATE:</th>
         <th>BOREWELL DEPTH(meters):</th>
		 <th>WATER LEVEL(meter):</th> 
		 <th>WATER AMOUNT(inches):</th>
		 <th>PRINT</th>
	 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		
		 <?php
	   $hydra_id=1;
       include("db_connection.php");
      
       $sql="select * from hydra";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
        
        
         
       
       <tr>
           <td> <?php echo $hydra_id++;?></td>
           <td> <?php echo $row["hydra_well"];?></td>
           <td> <?php echo $row["hydra_sector"];?></td>
           <td><?php echo $row["hydra_village"];?></td>
           <td> <?php echo $row["hydra_date"];?></td>
           <td> <?php echo $row["hydra_bore"];?></td>
		    <td> <?php echo $row["hydra_level"];?></td>
			 <td> <?php echo $row["hydra_quantity"];?></td>
			  <td>
		   <a href="hydra_print.php?id=<?php echo $row["hydra_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>
			
		   
		   
		   
		   s
		   
           
           <td>
		   <a href="hydra_edit.php?id=<?php echo $row["hydra_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="hydra_delete.php?id=<?php echo $row["hydra_id"]?>" class="btn btn-danger">DELETE </a>
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
