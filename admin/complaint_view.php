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
                           COMPLAINTS DETAILS <small></small>
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
                            COMPLAINTS DETAILS 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="complaint.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

         <th width="2114" rowspan="2">COMPLAINT ID:</th>
         <th width="77" rowspan="2">FIR NUMBER:</th>
         <th width="48" rowspan="2">DATE:</th>
         <th width="56" rowspan="2">PLACE:</th>
         <th width="77" rowspan="2">ER NUMBER:</th>
         <th width="88" rowspan="2">CRIMINAL NAME:</th>
         <th colspan="4"><div align="center">ITEM DETAILS </div></th>
         <th width="73" rowspan="2">DEPOSIT DETAILS:</th>
         <th width="101" rowspan="2">COMPLAINT STATUS:</th>
       </tr>
       <tr>
         <th width="54">ITEM NAME:</th>
		 <th width="86">QUANTITY IN NUMBERS:</th>
		 <th width="86">QUANTITY IN KG/LITRE:</th>
		 <th width="86">QUANTITY IN METER:</th>
		  <th>PRINT</th>
		  <th>Edit</th>
		 <th>Delete</th> 
	   </tr>
	   
	   </thead>
		<tbody>
		
		 <?php
	  $comp_id=1;
       include("db_connection.php");
      
       $sql="select * from complaint";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
	  
       <tr>
           <td> <?php echo $comp_id++;?></td>
           <td> <?php echo $row["comp_firno"];?></td>
           <td> <?php echo $row["comp_date"];?></td>
           <td><?php echo $row["comp_place"];?></td>
           <td> <?php echo $row["comp_erno"];?></td>
           <td> <?php echo $row["comp_criminal_name"];?></td>
		   <td> <?php echo $row["comp_item"];?></td>
		   <td> <?php echo $row["comp_item_in_no"];?></td>
		   <td> <?php echo $row["comp_item_in_kg"];?></td>
		   <td> <?php echo $row["comp_item_in_meter"];?></td>
		   <td> <?php echo $row["comp_deposit"];?></td>
		   <td> <?php echo $row["comp_status"];?></td>
           <td width="38">
		   <a href="complaint_print.php?id=<?php echo $row["comp_id"]?>" class="btn btn-success"> PRINT </a>		   </td>
           <td width="38">
		   <a href="complaint_edit.php?id=<?php echo $row["comp_id"]?>" class="btn btn-primary"> EDIT </a>		   </td>
           <td width="215">
		 <a href="complaint_delete.php?id=<?php echo $row["comp_id"]?>" class="btn btn-danger">DELETE </a>		 </td>
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
