<?php
session_start();
 $a=$_POST['new_password'];
   	$b=$_POST['confirm_password'];
	
		include('db_connection.php');
 $sql = "select * from login where username ='".$_SESSION['uname']."' and password='".$_POST['old_password']."'";
		 $res=mysqli_query($conn,$sql);
	if($a==$b)
	{
		if(mysqli_num_rows($res)>0)
		{
			 $sql1 = "update login set password = '".$_POST['new_password']."' where username  ='".$_SESSION['uname']."'";
			$res1 = mysqli_query($conn,$sql1);
			?>
				<script>
				alert('Successfully updated your password');
			document.location="Change_Password.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="Change_Password.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="Change_Password.php";
				</script>
			<?php
		}
		
?>
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
