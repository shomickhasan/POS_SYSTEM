<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";
  include "functions/manageBranchfunction.php";
?>



  


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

    <?php

      if (isset($_POST['update'])) {
               //$branch_id= $_POST['branch_id'];
                $branch_name= ucwords($_POST['branch_name']);
                $branch_location= ucwords($_POST['branch_location']);
                $branch_email= $_POST['branch_email'];
                $branch_phone= $_POST['branch_phone'];

                
                if (empty($branch_name)) {
                    echo '<div class="alert alert-danger" role="alert">
                         please enter Branch Name </div>';
                }
                elseif (empty($branch_location)) {
                    echo '<div class="alert alert-danger" role="alert">
                         please enter Branch ID </div>';
                }
                elseif (empty($branch_email)) {
                    echo '<div class="alert alert-danger" role="alert">
                         please enter Branch Email </div>';
                } 
                elseif (empty($branch_phone)) {
                    echo '<div class="alert alert-danger" role="alert">
                         please enter Branch Phone Number </div>';
                }

                else{
                        $branch_id =$_GET["branchId"];
                        $result=updateBranch($branch_id,$branch_name,$branch_location,$branch_email,$branch_phone);
                        header("location:index.php");
                      }
      
      }

    ?>
      

      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Update Branch Informanation</h3>
          </div>

        <?php
          
  
                if (isset($_GET["branchId"])) {
                 $branch_id =$_GET["branchId"];
                 $result=searchBranch($branch_id);
                 while($data= $result->fetch_assoc()){

        ?>






          <form action="" method="post" class="my-4 px-4">
            <div class="row">
              <!-- left side of this form -->
              <div class="col-md-12">
                 
                   <div class="form-group">
                    <label for="branch_id">Branch ID</label>
                    <input type="text" class="form-control" id="branch_id" placeholder=" BR0" name="branch_id"value="<?php echo $data['branch_id'];?>"  disabled>
                  </div>
                  <div class="form-group">
                    <label for="branch_name">Branch Name</label>
                    <input type="text" class="form-control text-capitilize" id="branch_name" placeholder=" Enter Branch Name" name="branch_name" value="<?php echo $data['branch_name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="branch_location">Branch Location</label>
                    <input type="text" class="form-control text-capitilize" id="branch_location" placeholder=" Enter Employe Phone No" name="branch_location"value="<?php echo $data['branch_location'];?>" >
                  </div>
                  <div class="form-group">
                    <label for="branch_email"> Branch Email</label>
                    <input type="email" class="form-control" id="branch_email" placeholder=" Enter Branch Email" name="branch_email" value="<?php echo $data['branch_email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="branch_phone">Branch Phone Number</label>
                    <input type="text" class="form-control" id="branch_phone" placeholder=" Enter Branch Phone Number" name="branch_phone" value="<?php echo $data['branch_phone'];?>" >
                  </div>
                  
              </div>
              
            </div>
            <!-- from submite button -->
             <div class="">
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
          </form>
          <?php
               
               }
            }


          ?>

         

        </div>
      </div>
    </section>
  <?php include "includes/footer.php"?>