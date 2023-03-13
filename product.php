<?php include 'validate.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12" id="reg">
        <div class="aa-myaccount-area">         
         <div class="aa-myaccount-register">
            <div class="header">
              <h2>Product Purchase</h2>
            </div>
                <div class="main">
                  <form action="" class="aa-login-form" method="POST" onsubmit="return myfun()" enctype='multipart/form-data'>
                     
                     <label for=""> Product ID<span id="pro_id">*</span></label>
                       <input type="text"  name="product_id" id="pid" class="id" required>    

                     <label for="">Product name<span id="pro_name">*</span></label>
                     <input type="text"  name="product_name" id="pname" class="pname"required><br>

                     <label for="">HSN Code<span id="h_code">*</span></label>
                     <input type="text" name="hsn_code" id="hcode" class="hsn" required>

                     <label for="">CP<span id="cp">*</span></label>
                     <input type="text"   name="cp" id="cpp" class="cp" required><br>

                     <label for="">Quantity<span id="quantity">*</span></label>
                     <input type="text"   name="quantity" id="qty" class="qty" required>

                     <label for="">SP<span id="sell">*</span></label>
                     <input type="text"   name="sp" id="spp" class="sp"required><br>

                     <label for="">Date<span>*</span></label>
                     
                     <input type="date"   name="date" id="datee" class="date" required>
                     <label for="">Category <span>*</span>
                      <span id="p_desc" class="text-danger font-weight-bold"></span>
                    </label>
                    <div class="control-group">
                        <div id = "address">
                        <?php include ("address.php")?>
                        </div>
                    </div>
                      
                     <button type="submit" class="aa-browse-btn" name="submit">Submit</button></div>
                     <!--<label class="rememberme" for="rememberme">
                      <input type="checkbox" id="rememberme"> Remember me </label>-->
                   
                   
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
</section>
</body>