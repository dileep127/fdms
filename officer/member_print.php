<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
    <script language="javascript1.2">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                              MEMBERS DETAILS<small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		<div id="printableArea">
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             MEMBERS DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								



 <table width="713" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
         
		 <th>MEMBER ID</th>  
         <th>FAMILY HEAD NAME</th>
         <th>MEMBER NAME</th>
		 <th>AGE</th>
         <th>GENDER:</th>
         <th>RELATIONSHIP</th>
        
		</tr>
		</thead>
		<tbody>
		
		<?php
	  $mem_id=1;
       include("db_connection.php");
      $id=$_REQUEST['id'];
       $sql="SELECT * FROM member m, family f where m.fam_id=f.fam_id and m.fam_id=$id";
      $res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)) 
       {
           
       ?>
		   <tr>
           <td> <?php echo $mem_id++;?></td>
           <td> <?php echo $row["fam_member_code"];?></td>
		   <td> <?php echo $row["member_name"];?></td>
           <td> <?php echo $row["mem_age"];?></td>
           <td><?php echo $row["mem_gender"];?></td>
           <td> <?php echo $row["mem_relation"];?></td>
          
           
           
       </tr>
       <?php
       }
       ?>
   </tbody>
                                </table>
                
</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
					</div>
					<input type="button" onclick="printDiv('printableArea')" class="btn btn-success" value="PRINT!" />
                    <!-- /.panel --><?php include('footer.php');?>
					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
