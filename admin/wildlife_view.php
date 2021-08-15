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
                            WILDLIFE DETAILS <small></small>
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
                            WILDLIFE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="wildlife.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
										
         <th>ANIMAL ID:</th>  
         <th>ANIMAL NAME:</th>
         <th>ANIMAL CODE:</th>
         <th>ANIMAL AGE GROUP:</th>
         <th>INFORMATION:</th>
         <th>ANIMAL PHOTO:</th>
		 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		
		<?php
	    $animal_id=1;
       include("db_connection.php");
      
       $sql="select * from wildlife";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
        
         
       
       <tr>
           <td> <?php echo $animal_id++;?></td>
           <td> <?php echo $row["animal_name"];?></td>
           <td> <?php echo $row["animal_code"];?></td>
           <td><?php echo $row["animal_age"];?></td>
           <td> <?php echo $row["animal_information"];?></td>
             <td> <img src="photo/<?php echo $row['animal_image'];?>" alt="no image" height="100" width="100"></td>

		   
		   
		   
		   
		   
		   
           
           <td>
		   <a href="wildlife_edit.php?id=<?php echo $row["animal_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="wildlife_delete.php?id=<?php echo $row["animal_id"]?>" class="btn btn-danger">DELETE </a>
			</td>
           
           
       </tr>
       <?php
       }
       ?>
   </table>
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
