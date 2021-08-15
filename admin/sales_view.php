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
                           SALES DETAILS <small></small>
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
                            SALES DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="sales.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
         <th>SALES ID:</th>  
         <th>CONTRACTOR NAME:</th>
         <th>TREE NAME:</th>
         <th>Qty:</th>
		 <th>Sale Rate:</th>
         <th>Total RATE:</th>
         <th>SALE DATE:</th>
		 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody>
		
		<?php
	  $sales_id=1;
	  $tal=0;
       include("db_connection.php");
      
       $sql="SELECT * FROM sales s,contractor c,trees t where s.contractor_id=c.contractor_id and s.tree_id=t.tree_id";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           $tal=$row['tree_stock'] * $row['sale_rate']
       ?>
        
         
     
       <tr>
           <td> <?php echo $sales_id++;?></td>
           <td> <?php echo $row["contractor_name"];?></td>
           <td> <?php echo $row["tree_name"];?></td>
           <td><?php echo $row["tree_stock"];?></td>
		   <td><?php echo $row["sale_rate"];?></td>
           <td> <?php echo $tal;?></td>
           <td> <?php echo $row["sale_date"];?></td>
		  
		   
		   
		   
		   
		   
           
           <td>
		   <a href="sales_edit.php?id=<?php echo $row["sales_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="sales_delete.php?id=<?php echo $row["sales_id"]?>" class="btn btn-danger">DELETE </a>
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
