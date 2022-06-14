<?php
	
      include"includes/db.php";

       
     
  // empoly add function
      function addProduct($product_id,$branch_id,$product_code,$product_name,$product_drescription,$product_type,$product_size,$product_cost_price,$product_sell_price,$product_quqntity){
        global $conn;

        $sql = "INSERT INTO tbl_products (product_id ,branch_id,product_code ,product_name,product_drescription,product_type,product_size,product_cost_price,product_sell_price,product_quqntity)VALUES('$product_id','$branch_id','$product_code','$product_name','$product_drescription','$product_type','$product_size','$product_cost_price','$product_sell_price','$product_quqntity')";

          $resul =$conn->query($sql);
       
        if($resul){
          $_SESSION['title']="Data Inseart Successfully";
          $_SESSION['text']="";
          $_SESSION['icon']="success";
          $_SESSION['button']="ok";
          return $resul;
          //header("location: ../addEmploye.php")
        }
        else{
          $_SESSION['title']="Product Inseart error";
          $_SESSION['text']="please check all info";
          $_SESSION['icon']="error";
          $_SESSION['button']="ok";
        }

     }




?>