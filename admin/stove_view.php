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
                              BENEFICIARIES DETALS (bio stove) <small></small>
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
                            BENEFICIARIES DETALS (bio stove)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="stove.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
         <th>ID:</th>  
         <th>BENEFICIARIES NAME:</th>
         <th>STOVE TYPE:</th>
         <th>ISSUED DATE:</th>
         <th>PRINT</th>
        <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		<?php
	   $stove_id=1;
       include("db_connection.php");
      
       $sql="select * from stove";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
        
       
       <tr>
           <td> <?php echo $stove_id++;?></td>
           <td> <?php echo $row["stove_name"];?></td>
           <td> <?php echo $row["stove_type"];?></td>
           <td><?php echo $row["stove_date"];?></td>
          
         
		 
		   <td>
		   <a href="stove_print.php?id=<?php echo $row["stove_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>
		            
           <td>
		   <a href="stove_edit.php?id=<?php echo $row["stove_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="stove_delete.php?id=<?php echo $row["stove_id"]?>" class="btn btn-danger">DELETE </a>
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
