<?php

	 
    include"includes/db.php";
    

    	function Branch($branch_id,$branch_name,$branch_location,$branch_email,$branch_phone){
                global $conn;

                
                $sql="INSERT INTO tbl_branch (`branch_id`, `branch_name`, `branch_location`, `branch_email`, `branch_phone`) VALUES ('$branch_id', '$branch_name', ' $branch_location', '$branch_email', '$branch_phone')";

                  $result =$conn->query($sql);
                    
	                if($result){
						          $_SESSION['title']="Data Inseart Successfully";
						          $_SESSION['text']="";
						          $_SESSION['icon']="success";
						          $_SESSION['button']="ok";
          
                        } 
                  else{
         
						          $_SESSION['title']="Data doesn't Inseart Successfully";
						          $_SESSION['text']="";
						          $_SESSION['icon']="error";
						          $_SESSION['button']="ok";
						           }

			          
    	


    	}


?>