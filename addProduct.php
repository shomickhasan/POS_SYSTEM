<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";?>
<?php  include "functions/function.php";?>

     



  


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product</h1>
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

      <?php
        include "functions/addProductFunction.php";

        //add product
      if (isset($_POST['save'])) {
          $product_id= $_POST['product_id'];
          $branch_id= $_POST['branch_id'];
          $product_drescreption= $_POST['product_drescreption'];
          $product_size= $_POST['product_size'];
          $product_cost= $_POST['product_cost'];
          $product_name= $_POST['product_name'];
          $product_code= $_POST['product_code'];
          $product_type= $_POST['product_type'];
          $product_quantity= $_POST['product_quantity'];
          $product_sell_price= $_POST['product_sell_price'];

          if($_SESSION['branch_id']==$branch_id){
            //echo"all right you are permite to go now";
            addProduct($product_id,$branch_id,$product_code,$product_name,$product_drescreption,$product_type,$product_size,$product_cost,$product_sell_price,$product_quantity);
          }

          else{
            $_SESSION['title']="Product Update doesn't Succesfully";
            $_SESSION['text']="please enter correct Branch ID";
            $_SESSION['icon']="error";
            $_SESSION['button']="ok";
          }

         
      }



      ?>
      

      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Add Product</h3>
          </div>
          <form action="" method="post" class="my-4 px-4">
            <div class="row">
              <!-- left side of this form -->
              <div class="col-md-6">
                 
                   <div class="form-group">
                    <label for="product_id"> Product Id</label>
                    <input type="text" class="form-control" id="product_id" placeholder=" Enter product id int" name="product_id"value="<?php  if (isset($_POST["save"])) {echo $product_id;}?>">
                  </div>
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
                    <label for="product_drescreption">Product Drescreption</label>
                    <textarea type="text" class="form-control" id="product_drescreption" placeholder=" Enter Product Drescreption" rows="3" name="product_drescreption"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="product_size">Product Size</label>
                    <input type="text" class="form-control" id="product_size" placeholder=" Enter Product Size" name="product_size"  value="">
                  </div>
                  <div class="form-group">
                    <label for="product_cost">Product Cost Price</label>
                    <input type="text" class="form-control" id="product_cost" placeholder=" Enter Product Cost int" name="product_cost" value="" >
                  </div>
                  
              </div>
              <!-- right side of a form -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" placeholder=" Enter Product Name" name="product_name">
                  </div>

                  <div class="form-group">
                    <label for="product_code">Product Code</label>
                    <input type="text" class="form-control" id="product_code" placeholder=" Enter Product Code" name="product_code">
                  </div>
                  <div class="form-group">
                    <label for="product_type">Product Type</label>
                    <input type="text" class="form-control" id="product_type" placeholder=" Enter Employe NID Number" name="product_type">
                  </div>
                  <div class="form-group">
                    <label for="product_quantity">Product Quantity</label>
                    <input type="text" class="form-control" id="product_quantity" placeholder=" Enter Product Quantity int" name="product_quantity">
                  </div>
                  <div class="form-group">
                    <label for="product_sell_price">Product Sell Price</label>
                    <input type="text" class="form-control" id="product_sell_price" placeholder="Enter Product Sell Price int" name="product_sell_price" >
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
  <?php include "includes/footer.php";?>