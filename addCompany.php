<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";?>
<?php  include "functions/function.php";?>

     



  


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <?php if(isset($_POST['save'])){
       
        $company_name= $_POST['company_name'];
        $branch_id= $_POST['branch_id'];
        $company_address= $_POST['company_address'];
        $company_phone_no= $_POST['company_phone_no'];
        $company_email= $_POST['company_email'];
        $company_manager_name= $_POST['company_manager_name'];
        

        
        if(empty($company_name)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Company Name </div>';
        }
        elseif(empty($company_address)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Address </div>';
        }
        elseif(empty($company_phone_no)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Company phone </div>';
        }
        elseif(empty($company_email)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Company Email </div>';
        }
        elseif(empty($company_manager_name)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Salary </div>';
        }
       

        
           
           

        
        include "functions/addCompanyFunction.php";

        if($_SESSION['branch_id']==$branch_id){
            //echo"all right you are permite to go now";
            newCompanyAdded($branch_id,$company_name,$company_address,$company_phone_no,$company_email,$company_manager_name);
          }

          else{
            
            $_SESSION['title']="Product Update doesn't Succesfully";
            $_SESSION['text']="please enter correct Branch ID";
            $_SESSION['icon']="error";
            $_SESSION['button']="ok";
          }
     }

    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Empolye Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Company Regestration</a></li>
              
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content employe regestration form -->

    <section class="content">
      

      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Add New Company</h3>
          </div>
          <form action="" method="post" class="my-4 px-4">
            <div class="row">
              <!-- left side of this form -->
              <div class="col-md-12">
                 
                   
                  <div class="form-group">
                    <label for="branch_id">Branch ID</label>
                    <select class="custom-select rounded-0" id="branch_id" name="branch_id">
                      <?php
                      //fro dinamically get branch Id aand value form tbl_branch
                        include"includes/db.php";
                        global $conn;
                        $sql= "SELECT *FROM tbl_branch";
                        $result= $conn->query($sql);
                      
                          while($data=$result->fetch_assoc()){
                            
                            ?>
                            <option value="<?php echo $data['branch_id'];?>"><?php echo $data['branch_id'];?></option>

                            <?php }
                             ?>
                      
                      
                       </select>
                    </div>
                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control" id="company_name" placeholder=" Enter Coampany Name" name="company_name" value="<?php  if (isset($_POST["save"])) {echo $company_name;}?>">
                  </div>
                  <div class="form-group">
                    <label for="company_address">Company Address</label>
                    <input type="text" class="form-control" id="company_address" placeholder=" Enter Company Address" name="company_address" value="<?php  if (isset($_POST["save"])) {echo $company_address;}?>" >
                  </div>
                  <div class="form-group">
                    <label for="company_phone_no"> Company Phone No</label>
                    <input type="text" class="form-control" id="company_phone_no" placeholder=" Enter Employe Phone No" name="company_phone_no" value="<?php  if (isset($_POST["save"])) {echo $company_phone_no;}?>" >
                  </div>
                  <div class="form-group">
                    <label for="company_email"> Company Email Address</label>
                    <input type="email" class="form-control" id="company_email" placeholder=" Enter Company Email Address" name="company_email" value="<?php  if (isset($_POST["save"])) {echo $company_email;}?>">
                  </div>
                  <div class="form-group">
                    <label for="company_manager_name"> Company Manager Name</label>
                    <input type="text" class="form-control" id="company_manager_name" placeholder=" Enter Company Email Address" name="company_manager_name" value="<?php  if (isset($_POST["save"])) {echo $company_manager_name;}?>">
                  </div>
                  
                  
              </div>
            
              
            </div>
            <!-- from submite button -->
             <div class="">
                  <button type="submit" class="btn btn-primary" name="save">Save</button>
              </div>
          </form>
         

        </div>
      </div>
    </section>

  <!-- Main Footer -->
  <?php include "includes/footer.php"?>