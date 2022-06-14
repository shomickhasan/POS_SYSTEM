<?php 

      include"includes/db.php";
	function showProduct(){
		$_manager_brinch_id=$_SESSION['branch_id'];
           global $conn;
		$sql="SELECT *FROM tbl_products WHERE branch_id='$_manager_brinch_id'";
		 $result=$conn->query($sql);
		 if($result){
                  return $result;

		 }
		 else{
		 	   $_SESSION['title']="Data not Found";
			   $_SESSION['text']="";
			   $_SESSION['icon']="error";
			   $_SESSION['button']="ok";
			}
            

	}