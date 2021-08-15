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
                            OFFICER DETAILS <small></small>
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
                            OFFICERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<a href="officer.php" class="btn btn-primary">Add New Details</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										 <tr>
         <th>OFFICER ID:</th>  
         <th>OFFICER NAME:</th>
         <th>DESIGNATION:</th>
         <th>DATE OF BIRTH:</th>
         <th>GENDER:</th>
         <th>ADRESS:</th>
		 <th>OFFICER CODE:</th> 
		 <th>CONTACT:</th>
		  <th>EMAIL:</th>
		 <th>PHOTO:</th>
       <th>Edit</th>
		 <th>Delete</th> 
		</tr>
		</thead>
		<tbody
		
		<?php
	   $o_id=1;
       include("db_connection.php");
      
       $sql="select * from officer";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		
		
       <tr>
           <td> <?php echo $o_id++;?></td>
           <td> <?php echo $row["o_fullname"];?></td>
           <td> <?php echo $row["o_designation"];?></td>
           <td><?php echo $row["o_dob"];?></td>
           <td> <?php echo $row["o_gender"];?></td>
           <td> <?php echo $row["o_adress"];?></td>
		    <td> <?php echo $row["o_code"];?></td>
			 <td> <?php echo $row["o_contact"];?></td>
			  <td> <?php echo $row["o_email"];?></td>
			   <td> <img src="photo/<?php echo $row['o_photo'];?>" alt="no image" height="100" width="100"></td>
		   
		   
		   
		   
		   
           
           <td>
		   <a href="officer_edit.php?id=<?php echo $row["o_id"]?>" class="btn btn-primary"> EDIT </a>
		   </td>
           <td>
		 <a href="officer_delete.php?id=<?php echo $row["o_id"]?>" class="btn btn-danger">DELETE </a>
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
