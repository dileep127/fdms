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
                            VISITORS DETAILS <small></small>
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
                            VISITORS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="visit.php" class="btn btn-primary">Add New Details</a>
							<p>&nbsp;</p>
                            <form name="form1" method="post" action="visit_view_next.php">
                              Select Date 
                              <input name="date" type="date" id="date">
                              <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                            </form>                                
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
										
         <th>VISITORS ID:</th>  
         <th>VISITOR NAME:</th>
         <th>VISIT DATE:</th>
         <th> DISCRIPTION:</th>
         <th>PRINT</th>
        <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		
		<tbody>
		<?php
	    $visit_id=1;
       include("db_connection.php");
      
       $sql="select * from visit";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		
        
       
       <tr>
           <td> <?php echo $visit_id++;?></td>
           <td> <?php echo $row["visit_name"];?></td>
           <td> <?php echo $row["visit_date"];?></td>
           <td><?php echo $row["visit_discription"];?></td>
          <!--  <td> <?php echo $row["visit_sign"];?></td> -->
          <td>
		   <a href="visit_print.php?id=<?php echo $row["visit_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>  
           <td>
		   <a href="visit_edit.php?id=<?php echo $row["visit_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="visit_delete.php?id=<?php echo $row["visit_id"]?>" class="btn btn-danger">DELETE </a>
			</td>
           
           
       </tr>
       <?php
       }
       ?>
	    </tbody>
   </table>

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
