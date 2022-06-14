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
      <!-- working area -->
       <table id="myTable" class="display table table-dark table-hover table-responsive" border="1px">
                      <thead>
                        <tr>
                          <th>Product Id</th>
                          <th>Branch Id</th>
                          <th>Product Code</th>
                          <th>Product Name</th>
                          <th>Product Drescreption</th>
                          <th>Product Drescreption</th>
                          <th>Product Product type</th>
                          <th>Product quantity</th>
                          <th>Product Cost Price total</th>
                          <th>Product Sell price Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    
         <?php
              include "functions/manageProductFunction.php";
               $result=showProduct();
               if($result->num_rows>0){
                  while($data=$result->fetch_assoc()){
                    ?>
                   
                       <tbody class="table-dark" style="color: #000;">
                         <tr>
                           <td><?php echo $data['product_id'];?></td>
                           <td><?php echo $data['branch_id'];?></td>
                           <td><?php echo $data['product_code'];?></td>
                           <td><?php echo $data['product_name'];?></td>
                           <td><?php echo $data['product_drescription'];?></td>
                           <td><?php echo $data['product_type'];?></td>
                           <td><?php echo $data['product_size'];?></td>
                           <td><?php echo $data['product_quqntity'];?></td>
                           <td><?php echo $data['product_cost_price'];?></td>
                           <td><?php echo $data['product_sell_price'];?></td>
                           <td>
                             <button class="btn  btn-success">Update </button>
                             <button class="btn  btn-danger"> Delete</button>
                           </td>
                           
                           
                          
                         

                    <?php
                  }
               }
               else{
                 ?>

                     <h2 class="text-center">There have no product in your Brinch<h2>
                 <?php
               }
         ?>
                      </tr>
                    </tbody>
                  </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <?php include "includes/footer.php"?>