<?php
    include"includes/db.php";
    
    function searchwithProductCode($product_code){
       
        $branch_id=$_SESSION['branch_id'];
       global $conn;
       $sql= "SELECT *FROM tbl_products WHERE product_code ='$product_code' AND branch_id='$branch_id'";
       $result= $conn->query($sql);
       if($result){
          return $result;
       }
       
       
    } 


  // function for product Perches

    function addProductPerches($br_id,$company_id,$purches_date,$invoice_number,$product_code,$product_name,$purches_price,$purches_quantity,$total_price){
       global $conn;
       $sql ="INSERT INTO tbl_purches_detals ( br_id, company_id, purches_date, invoice_number, product_code, product_name,purches_price, purches_quantity, total_price) VALUES ('$br_id','$company_id','$purches_date','$invoice_number','$product_code','$product_name','$purches_price','$purches_quantity','$total_price')";

        $result= $conn->query($sql);

         if ($result) {

          $_SESSION['title']="Product Purches Successfully and Update With product Quantity";
          $_SESSION['text']="";
          $_SESSION['icon']="success";
          $_SESSION['button']="ok";
          return $result;
        }

        else{
          
          $_SESSION['title']="Data doesn't Inseart Successfully";
          $_SESSION['text']="";
          $_SESSION['icon']="error";
          $_SESSION['button']="ok";
        }
    }

    // update quantity in product table 

      function updateProductQuantity($updateQuantity,$product_code){
         global $conn;    
           $sql= "UPDATE tbl_products SET product_quqntity ='$updateQuantity' WHERE product_code='$product_code'";
            $result = $conn->query($sql);
            if ($result) {
               return $result;
             } 
      }


    // show product in purches table 

     function showPerchesTable($invoice_number,$purches_date, $br_id){
             global $conn;
          $sql= "SELECT * FROM tbl_purches_detals WHERE invoice_number='$invoice_number' AND  purches_date='$purches_date' AND br_id='$br_id'";
          
          $result= $conn->query($sql);

          if($result->num_rows>0){
             return $result;
          }
     }

      
                       
?>