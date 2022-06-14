<?php 

      include"includes/db.php";
	function searchBranch($branch_id){
           global $conn;
		$sql="SELECT * FROM `tbl_branch` WHERE branch_id='$branch_id'";
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



	function updateBranch($branch_id,$branch_name,$branch_location,$branch_email,$branch_phone){
		global $conn;

	     // $sql="UPDATE tbl_branch SET branch_name='$branch_name',branch_location='$branch_location',branch_email='$branch_email',branch_phone='$branch_phone',branch_id ='$branch_id' WHERE branch_id ='$branch_id'";
		$sql="UPDATE `tbl_branch` SET branch_id='$branch_id',branch_name='$branch_name',branch_location='$branch_location',branch_email='$branch_email',branch_phone='$branch_phone' WHERE branch_id='$branch_id'";

			  if($result= $conn->query($sql)){
                      $_SESSION['title']="Data Update Successfully";
		          $_SESSION['text']="";
		          $_SESSION['icon']="success";
		          $_SESSION['button']="ok";
			    return $result;
			    
			  }
			  else{
			    $_SESSION['title']="Data dosen't Update Successfully";
		          $_SESSION['text']="";
		          $_SESSION['icon']="error";
		          $_SESSION['button']="ok";
			  }

	  
	}

	function deleteBranch( $branch_id){
		global $conn;
		$sql="DELETE FROM `tbl_branch` WHERE branch_id='$branch_id'";
		$result= $conn->query($sql);
		if($result){
			$_SESSION['title']="Data Delete Successfully";
		      $_SESSION['text']="";
		      $_SESSION['icon']="success";
		      $_SESSION['button']="ok";
			return $result;
		}
		  else{
			    $_SESSION['title']="Data dosen't Delete Successfully";
		          $_SESSION['text']="";
		          $_SESSION['icon']="error";
		          $_SESSION['button']="ok";
			  }

	}



?>