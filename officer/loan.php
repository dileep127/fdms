<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php include('metadata.php');?>
	 <?php include('header.php');?>
	 <?php include('sidebar.php');?>
</head>
<body>
<script language="javascript1.2">
function calc(){
  one = document.autoSumForm.loan_prinamt.value;
  two = document.autoSumForm.loan_interest.value; 
//  third = document.autoSumForm.loan_total.value; 

  //if(box == 1){
     iamt = document.autoSumForm.loan_interest_amount.value = (one * 1) * ((two * 1) / 100);;
 // }else if(box == 2 || box == 3){
     document.autoSumForm.loan_total.value = (iamt * 1) + (one * 1);
 // }

}
</script>
    
        <!--/. NAV TOP  -->
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                              LOAN DETAILS <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Forms</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             LOAN DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
<form name="autoSumForm" id="formID" method="post" action="loan_insert.php">
 
 <table width="423" height="619" border="0" align="center">
     <tr>
      <th width="373" scope="col"><div align="left">DEBTOR NAME </div></th>
      <th width="390" scope="col"><input name="loan_name" type="text" id="loan_name" size="65" class="validate[required] form-control"/></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">LOAN GIVEN DATE </div></th>
      <td><input name="loan_gdate" type="date" id="loan_gdate" size="65" class="validate[required,custom[date]] form-control" ></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">LOAN AMMOUNT </div></th>
      <td><input name="loan_ammount" type="text"  id="loan_ammount" size="65" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">MONTH</div></th>
      <td><input name="loan_month" type="text" id="loan_month" size="65" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">RE-PAYMENT DATE </div></th>
      <td><input name="loan_rpdate" type="date" id="loan_rpdate" size="65" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">DATE OF RE-PAYMENT </div></th>
      <td><input name="loan_repdate" type="date" id="loan_repdate" size="65" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">PRINCIPAL AMMOUNT </div></th>
      <td><input name="loan_prinamt" type="text" id="loan_prinamt" size="65" onkeyup="calc();" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">INTEREST</div></th>
      <td><input name="loan_interest" type="text" id="loan_interest" size="65" onkeyup="calc();" class="form-control"></td>
    </tr>
	 <tr>
      <th scope="row"><div align="left">INTEREST AMOUNT</div></th>
      <td><input name="loan_interest_amount" type="text" id="loan_interest_amount" size="65" readonly="" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">TOTAL AMMOUNT </div></th>
      <td><input name="loan_total" type="text" id="loan_total" size="65" readonly=""  class="form-control"></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">EXTRA PAYMENT </div></th>
      <td><input name="loan_extra" type="text" id="loan_extra" size="65" class="form-control"></td>
    </tr>
   
  
   <tr>
      <td height="69" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
       
         
          <input type="reset" name="Submit3" value="Reset"  class="btn btn-danger">
        </div> </td>
		</tr>
</table>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --><?php include('footer.php');?>
					<?php include('val.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
</body>
</html>
