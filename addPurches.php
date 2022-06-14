<?php  include "includes/header.php";?>
<?php  include "includes/preloder.php";?>
<?php  include "includes/navbar.php";?>
<?php  include "includes/sidebar.php";?>
<?php  
  
  $branch_id=$_SESSION['branch_id'];

   include "functions/addPurchesFunction.php";

?>

     



  


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product Purcheses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Add New Product</a></li>
              
              
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
              <h3 class="card-title">Product Purches</h3>
          </div>
          <form action="" method="post" class="my-4 px-4">
             <div class="row">
              <!-- column -->
               <div class="col-md-3">
                 <div class="form-group">
                    <label for="branch_id"> Branch ID</label>
                     <input type="text" class="form-control" id="branch_id" placeholder=" Enter Employe Phone No" name="branch_id" value="<?php echo $branch_id ;?>" readonly >
                  </div>
               </div>
               <!-- column -->
               <div class="col-md-3">
                 <div class="form-group">
                    <label for="branch_id">Company Name</label>
                    <select class="custom-select rounded-0" id="branch_id" name="company_id">
                      <?php
                      //fro dinamically get branch Id aand value form tbl_branch
                        include"includes/db.php";
                        global $conn;
                        $sql= "SELECT *FROM tbl_company";
                        $result= $conn->query($sql);
                      
                          while($data=$result->fetch_assoc()){
                            
                            ?>
                            <option value="<?php echo $data['company_id'];?>"><?php echo $data['Company_name'];?></option>

                            <?php }
                             ?>
                      
                      
                       </select>
                    </div>
               </div>
               <div class="col-md-3">
                 <div class="form-group">
                    <label for="company_phone_no"> Date</label>
                    <input type="date" class="form-control" id="company_phone_no" placeholder=" Enter Employe Phone No" name="purches_date" value="<?php  if (isset($_POST["search_btn"])) {echo $_POST['purches_date'];}?>" >
                  </div>
               </div>
                 <div class="col-md-3">
                     <div class="form-group">
                        <label for="company_email"> Invoice Number:</label>
                        <input type="text" class="form-control" id="company_email" placeholder=" Enter Company Email Address" name="invoice_number" value="<?php  if (isset($_POST["search_btn"])) {echo $_POST['invoice_number'];}?>">
                      </div>
                 </div>
             </div>
             

             <!-- rwo for add product quantity and purches Detals -->
             <div class="row my-3">
                 <div class="col-md-5">
                     <div class="input-group">
                       
                        <input type="text" placeholder="Enter Product Code"  class="form-control" name="product_code" value="<?php if (isset($_POST['search_btn'])) { echo $_POST['product_code'];}?>">

                         <span class="input-group-btn">
                           <button class="btn  btn-primary" value="ok" name="search_btn">OK</button>
                         </span>
                      </div>
                  </div>
                  


                   
                  </div>

                 <div class="row">
                     <div class="col-md-3">
                       <div class="input-group">
                         <?php 
                             
                             
                               if (isset($_POST['search_btn'])) {

                                   $productCode= $_POST['product_code'];
                                  
                                   $result= searchwithProductCode($productCode);
                                     while($data = $result->fetch_assoc()){
                                         $productPerchesPrice= $data['product_cost_price'];
                                         if($productPerchesPrice){
                                          ?>
                                          <label for="inputEmail" class="m-2">Product Purches Price</label>
                                          <input type="text" class="form-control"   name="perches_price" value="<?php echo $productPerchesPrice; ?>" id="productIndiprice">
                                          <?php

                                         }

                                         else{
                                            $_SESSION['title']="Product not found in your branch";
                                            $_SESSION['text']="please enter correct Branch ID";
                                            $_SESSION['icon']="error";
                                            $_SESSION['button']="ok";
                                         }

                                      ?>
                          
                                        
                      </div>
                     </div>
                     <div class="col-md-3">
                             <div class="input-group">
                                <label for="inputEmail" class="m-2">Quantity In Stock</label>
                                <input type="text" class="form-control"  name="quantity_in_stock" id='stockQuantity' value="<?php echo $data['product_quqntity'] ;?>">

                                <input type="hidden" name="updateQuantity" id="updateQuantity">
                                
                                <input type="hidden" name="product_name" id="" value="<?php  echo $data['product_name']?>">
                                
                                
                              </div>
                      </div>
                      
                      <div class="col-md-3">
                         <div class="input-group">
                              <label for="inputEmail" class="m-2"> Add Quantity</label>
                              <input type="text"  class="form-control" value="0"  name="purches_quantity" id="quantity">
                               <span class="input-group-btn">
                                  <input type="button" id="quantityAdd" value="+" class="btn btn-info" onclick="quantityAdded()">
                                  <input type="button" id="quantityAdd" value="-" class="btn btn-danger" onclick="quantitysub()">
                               </span>

                               <script>
                                //quantity + - btn
                                  function quantityAdded(){
                                    var quqatity= parseInt(document.getElementById('quantity').value);
                                    var totalQuqntity=quqatity+1;
                                    document.getElementById('quantity').value=totalQuqntity;
                                    var productIndiprice= parseInt(document.getElementById('productIndiprice').value);
                                    var totalWithquantity= productIndiprice*totalQuqntity;
                                    document.getElementById('price').value= totalWithquantity;

                                    //quantity update with store Quantity

                                    var stockQuantity= parseInt(document.getElementById('stockQuantity').value);
                                    var updateQuantity= stockQuantity +totalQuqntity;
                                    document.getElementById('updateQuantity').value=updateQuantity;

                                   



                                   

                                    

                                  }
                                  function quantitysub(){
                                    var quqatity= parseInt(document.getElementById('quantity').value);
                                    if(quqatity==0){

                                    }
                                    else if(quqatity!==0 ){
                                      var totalQuqntity=quqatity-1;
                                    document.getElementById('quantity').value=totalQuqntity;
                                    var productIndiprice= parseInt(document.getElementById('productIndiprice').value);
                                    var totalWithquantity= productIndiprice*totalQuqntity;
                                    document.getElementById('price').value= totalWithquantity;

                                     //quantity update with store Quantity

                                     var updateQuantity= document.getElementById('updateQuantity').value;
                                     var subUpdateQuantity = updateQuantity-1;
                                      document.getElementById('updateQuantity').value=subUpdateQuantity;

                                   



                                    }
                                  }
                               </script>
                          </div>
                      </div>
                        <div class="col-md-3">
                             <div class="input-group">
                                <label for="inputEmail" class="m-2">Total Price</label>
                                <input type="text" class="form-control"  name="total_price" id='price'>
                                <span class="input-group-btn">
                                  <input type="submit"  class="btn btn-default"  name="addPurches" value="Add">
                                </span>
                                
                              </div>
                          </div>
                    
                </div>
               
                   
                


                 <?php
                  // while loop end
                  }

                // end iff isset with search
                }?> 
              </div>
              </form>
            

            
           
            
             

                      

            
    
         
           
        </div>
         <?php    
                // add perchus start
                    if (isset($_POST['addPurches'])) {
                       $branch_id;
                       $company_id= $_POST['company_id'];
                       $purches_date= $_POST['purches_date']; 
                       $invoice_number= $_POST['invoice_number'];
                       $product_code= $_POST['product_code'];
                       $product_name=$_POST['product_name'];
                       $purches_price= $_POST['perches_price'];
                       $purches_quantity= $_POST['purches_quantity'];
                       $total_price=$_POST['total_price'];

                       $updateQuantity= $_POST['updateQuantity'];
                       

                     
                       

                       $result= addProductPerches($branch_id,$company_id,$purches_date,$invoice_number,$product_code,$product_name,$purches_price,$purches_quantity,$total_price); 
              
                          $updateResult= updateProductQuantity($updateQuantity, $product_code);
                          
                       ?>


                 <!-- data table      -->
                <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <table id="myTable" class="display mt-4 text-danger" border="1px">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Invoice Number</th>
                          <th>Product Code</th>
                          <th>Product Name</th>
                          <th>Price per Pice</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $grand_total_price=0;
                            $grand_total_quantity=0;
                           $result= showPerchesTable($invoice_number,$purches_date, $branch_id);
                            foreach ($result as  $data) { 
                               $grand_total_price=  $grand_total_price +$data['total_price'];
                               $grand_total_quantity= $grand_total_quantity +$data['purches_quantity'];

                              ?>
                              
                          <tr>
                            <td><?php echo $data['purches_date']?></td>
                            <td><?php echo $data['invoice_number']?></td>
                            <td><?php echo $data['product_code']?></td>
                            <td><?php echo $data['product_name']?></td>
                            <td><?php echo $data['purches_price']?></td>
                            <td><?php echo $data['purches_quantity']?></td>
                            <td><?php echo $data['total_price']?></td>
                            
                            
                          </tr> 
                          
                           

                           



                           <?php 
                           // end for each  show parches table
                         }?>

                         <tr>
                           <td colspan="5">TOTAL</td>
                           <td colspan=""><?php echo $grand_total_quantity; ?></td>
                           <td colspan=""><?php echo $grand_total_price; ?></td>
                         </tr>
                        
                      </tbody>
                    </table>
                </div>
              </div>
            </div> 



                <?php
                  //end if isset for insert parches value
                     } 
                  ?>
           

      </div>
     
    </section>


  <!-- Main Footer -->
  <?php include "includes/footer.php"?>


  