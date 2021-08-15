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
                            LOAN DETAILS <small></small>
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
                          LOAN DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="loan.php" class="btn btn-primary">Add New Details</a><hr>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
	    <th>LOAN ID:</th>  
         <th>DEBTOR NAME:</th>  
         <th>LOAN GIVEN DATE:</th>
         <th>LOAN AMMOUNT:</th>
         <th>MONTH:</th>
         <th>RE-PAYMENT DATE:</th>
         <th>DATE OF RE-PAYMENT:</th>
		 <th>PRINCIPAL AMMOUNT:</th> 
		 <th>INTEREST:</th>
		  <th>TOTAL AMMOUNT:</th>
		 <th>EXTRA PAYMENT:</th>
		 <th>PRINT</th>
		 <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody>
		
		 <?php
	   $loan_id=1;
	   
       include("db_connection.php");
      
       $sql="select * from loan";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
        
         
       
       <tr>
           <td> <?php echo $loan_id++;?></td>
           <td> <?php echo $row["loan_name"];?></td>
           <td> <?php echo $row["loan_gdate"];?></td>
           <td><?php echo $row["loan_ammount"];?></td>
           <td> <?php echo $row["loan_month"];?></td>
           <td> <?php echo $row["loan_rpdate"];?></td>
		    <td> <?php echo $row["loan_repdate"];?></td>
			 <td> <?php echo $row["loan_prinamt"];?></td>
			  <td> <?php echo $row["loan_interest"];?></td>
			   <td> <?php echo $row["loan_total"];?></td>
			   <td> <?php echo $row["loan_extra"];?></td>
			  
		   
		      
           <td>
		   <a href="loan_print.php?id=<?php echo $row["loan_id"]?>" class="btn btn-success"> PRINT </a>
		   </td>
          
		   
		   
		   
           
           <td>
		   <a href="loan_edit.php?id=<?php echo $row["loan_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="loan_delete.php?id=<?php echo $row["loan_id"]?>" class="btn btn-danger">DELETE </a>
			</td>
           
           
       </tr>
       
       <?php
       }
       ?>
	    </tbody>
	   <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
   
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
