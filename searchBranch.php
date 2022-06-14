<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";?>



  


  

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
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Search Branch</h3>
          </div>
          <form action="" method="post" class="my-4 px-4">
           
           <div class="form-inline">
              <div class="input-group">
                <input class="form-control form-control" type="text" placeholder="Search" aria-label="Search" name="branch_id">
                <div class="input-group-append">
                  <button class="btn btn-primary" name="searchBranch">Search</button>
                </div>
              </div>
            </div>
             <?php
            include "functions/manageBranchfunction.php";

                if (isset($_POST['searchBranch'])) {
                   $branch_id = $_POST['branch_id'];
                     $branch= searchBranch($branch_id);
                      while($data=$branch->fetch_assoc()){
                       //echo $data['branch_name'];
                        //echo $data['branch_name']."<br>";
                        //echo $data['branch_location'];
                        ?>
                           <table id="example" class="display table mt-5" style="width:100%">
                             <thead class="thead-light">
                               <th>Branch ID</th>
                               <th>Branch Name</th>
                               <th>Branch Location</th>
                               <th>Branch Email</th>
                               <th>Branch phonr</th>
                               <th>Action</th>
                             </thead>
                             <tbody>
                               <tr >
                                 <td><?php echo $data['branch_id'] ?></td>
                                 <td><?php echo $data['branch_name'] ?></td>
                                 <td><?php echo $data['branch_location'] ?></td>
                                 <td><?php echo $data['branch_email'] ?></td>
                                 <td><?php echo $data['branch_phone'] ?></td>
                                 <td>
                                  <a href="branchUpdate.php?branchId=<?php echo $data['branch_id']?>"class="btn btn-warning btn-sm" id=>Update</a>

                                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $data['branch_id']?>">Delete</button>

                                   
                                 </td>
                               </tr>
                             
                                <!-- Modal -->
<div class="modal fade" id="delete<?php echo $data['branch_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you Want to Delete <?php echo $data['branch_name'];?> Branch?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="searchBranch.php?branchId=<?php echo $data['branch_id'];?>" type="button" class="btn btn-primary">Confirm</a>
      </div>
    </div>
  </div>
</div>

     

                            <?php
                            }
                          }

                          //delete function call for
                            if (isset($_GET['branchId'])) {
                                $branch_id= $_GET['branchId'];
                                deleteBranch( $branch_id);
                            }
                           ?>
                          </tbody>
                            </table> 

             
          </form>
         

        </div>
      </div>
           </div>
         </div>
       </div>
      
    </section>
    <?php include "includes/footer.php" ?>



    
