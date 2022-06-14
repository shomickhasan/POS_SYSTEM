<?php
      include"includes/header.php";
      include"includes/db.php";

       
     
  // empoly add function
      function addEmpolye($branch_id,$employe_designation,$employe_name,$employe_address,$employe_NID,$employe_phone,$employe_email,$employe_joningDate,$employe_salary,$employe_password,$employe_status){
        global $conn;
        $sql = "INSERT INTO tbl_employe(branch_id,employe_designation,employe_name,employe_address,employe_NID,employe_phone,employe_email,employe_joningDate,employe_salary,employe_password,employe_status)VALUES('$branch_id','$employe_designation','$employe_name','$employe_address','$employe_NID','$employe_phone','$employe_email','$employe_joningDate','$employe_salary','$employe_password','$employe_status')";

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


