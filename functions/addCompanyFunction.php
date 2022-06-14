<?php
      include"includes/header.php";
      include"includes/db.php";

       
     
  // empoly add function
      function newCompanyAdded($branch_id,$company_name,$company_address,$company_phone_no,$company_email,$company_manager_name){
        global $conn;
        $sql = "INSERT INTO  tbl_company(branch_id,Company_name,company_address,company_phone,company_email,company_manager_name)VALUES('$branch_id','$company_name','$company_address','$company_phone_no','$company_email','$company_manager_name')";

          $resul =$conn->query($sql);
       
        if($resul){
          $_SESSION['title']="Data Inseart Successfully";
          $_SESSION['text']="";
          $_SESSION['icon']="success";
          $_SESSION['button']="ok";
          return $resul;
          //header("location: ../addEmploye.php");
        }
        else{
          // return '<div class="alert alert-danger" role="alert">
          //       Data not saved'.$con->error.'</div>';

          $_SESSION['title']="Data doesn't Inseart Successfully";
          $_SESSION['text']="";
          $_SESSION['icon']="error";
          $_SESSION['button']="ok";}
    };


     
           
       

     

           ?>


