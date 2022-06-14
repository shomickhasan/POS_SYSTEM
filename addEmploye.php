<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";?>
<?php  include "functions/function.php";?>

     



  


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <?php if(isset($_POST['save'])){
       
        $employ_name= $_POST['employe_name'];
        $employe_address= $_POST['employe_address'];
        $employe_phone= $_POST['employe_phone'];
        $employe_email= $_POST['employe_email'];
        $employe_salary= $_POST['employe_salary'];
        $branch_id= $_POST['branch_id'];
        $employe_degenation= $_POST['employe_degenation'];
        $employe_nid= $_POST['employe_nid'];
        $employe_pass= md5($_POST['employe_pass']);
        $empolye_status= $_POST['empolye_status'];
        $employe_joningDate= $_POST['employe_joningDate'];

        
        if(empty($employ_name)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Name </div>';
        }
        elseif(empty($employe_address)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Address </div>';
        }
        elseif(empty($employe_phone)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye phone </div>';
        }
        elseif(empty($employe_email)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Email </div>';
        }
        elseif(empty($employe_salary)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Salary </div>';
        }
        elseif(empty($employe_degenation)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Degination </div>';
        }
        elseif(empty($employe_nid)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye NID Number </div>';
        }
        elseif(empty($employe_pass)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Passeord </div>';
        }
        elseif(empty($empolye_status)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Status </div>';
        }
         elseif(empty($employe_joningDate)){
          echo '<div class="alert alert-danger" role="alert">
          please enter Empolye Joning Date </div>';
         }

        else{
           $result= addEmpolye($branch_id,$employe_degenation,$employ_name,$employe_address,$employe_nid,$employe_phone,$employe_email,$employe_joningDate,$employe_salary,$employe_pass,$empolye_status);
             header('location:index.php');
           
           

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
              <li class="breadcrumb-item active"><a href="#">Employ Regestration</a></li>
              
              
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
              <h3 class="card-title">Quick Example</h3>
          </div>
          <form action="" method="post" class="my-4 px-4">
            <div class="row">
              <!-- left side of this form -->
              <div class="col-md-6">
                 
                   <div class="form-group">
                    <label for="employe_name">Name</label>
                    <input type="text" class="form-control" id="employe_id" placeholder=" Enter Employe Name" name="employe_name"value="<?php  if (isset($_POST["save"])) {echo $employ_name;}?>">
                  </div>
                  <div class="form-group">
                    <label for="employe_addres">Address</label>
                    <input type="text" class="form-control" id="employe_address" placeholder=" Enter Employe Address" name="employe_address" value="<?php  if (isset($_POST["save"])) {echo $employe_address;}?>">
                  </div>
                  <div class="form-group">
                    <label for="employephone">Phone</label>
                    <input type="text" class="form-control" id="employe_phone" placeholder=" Enter Employe Phone No" name="employe_phone" value="<?php  if (isset($_POST["save"])) {echo $employe_phone;}?>" >
                  </div>
                  <div class="form-group">
                    <label for="employe_email">Email</label>
                    <input type="email" class="form-control" id="employe_email" placeholder=" Enter Employe Email" name="employe_email" value="<?php  if (isset($_POST["save"])) {echo $employe_email;}?>">
                  </div>
                  <div class="form-group">
                    <label for="employe_salary">Salary</label>
                    <input type="text" class="form-control" id="employe_salary" placeholder=" Enter Employe mounthly Salary" name="employe_salary" value="<?php  if (isset($_POST["save"])) {echo $employe_salary;}?>" >
                  </div>
                  
              </div>
              <!-- right side of a form -->
              <div class="col-md-6">
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
                    <label for="exampleSelectRounded0">Designation</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="employe_degenation">
                      <option value="Manager">Manager</option>
                      <option value="Selses Man">Selses Man</option>
                      <option value="Security Gaird">Security Gaird</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="employe_nid">NID Number</label>
                    <input type="text" class="form-control" id="employe_nid" placeholder=" Enter Employe NID Number" name="employe_nid"value="<?php  if (isset($_POST["save"])) {echo $employe_nid;}?>">
                  </div>
                  <div class="form-group">
                    <label for="employe_pass">Password</label>
                    <input type="password" class="form-control" id="employe_pass" placeholder=" Enter Employe password" name="employe_pass">
                  </div>
                  <div class="form-group">
                    <label for="employe_joningDate">Joining Date</label>
                    <input type="date" class="form-control" id="employe_joningDate" placeholder="" name="employe_joningDate" value="<?php  if (isset($_POST["save"])) {echo $employe_joningDate;}?>">
                  </div>
                  <div class="form-group">
                    <label for="empolye_status">Status</label>
                    <select class="custom-select rounded-0" id="empolye_status" name="empolye_status">
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
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