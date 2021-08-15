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
                           STOCK DETAILS<small></small>
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
                           STOCK DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="stock.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
         <th>STOCK ID:</th>  
         <th>TREE NAME:</th>
         <th>TREE STOCK:</th>
         <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		
		<?php
	   $stock_id=1;
       include("db_connection.php");
      
       $sql="SELECT * FROM stock s, trees  t where s.tree_id=t.tree_id";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		
        
         
    
       
       <tr>
           <td> <?php echo $stock_id++;?></td>
           <td> <?php echo $row["tree_name"];?></td>
           <td> <?php echo $row["tree_stock"];?></td>
          
		   
		   
		   
		   
		   
           
           <td>
		   <a href="stock_edit.php?id=<?php echo $row["stock_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="stock_delete.php?id=<?php echo $row["stock_id"]?>" class="btn btn-danger">DELETE </a>
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
