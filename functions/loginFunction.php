<?php
     
     include"includes/db.php";
    function userLogin($emailAndPhone, $password){
          global $conn;
           $sql= "SELECT *FROM tbl_employe WHERE (employe_email='$emailAndPhone' OR employe_phone='$emailAndPhone') AND employe_password='$password' AND employe_designation='Manager' AND employe_status ='1'";

              $result= $conn->query($sql);
               session_start() ;
            if($result->num_rows>0){
              while ($data= $result->fetch_assoc()) {
                $_SESSION['employe_name']=$data['employe_name'];
                $_SESSION['employe_email']=$data['employe_email'];
                $_SESSION['employe_designation']=$data['employe_designation'];
                $_SESSION['branch_id']=$data['branch_id'];
                header('location:index.php');
              }
               
             }
             else{
               echo"Login error";
             }

      }



?>