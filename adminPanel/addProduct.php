<?php
include('query.php');
 include('header.php');
  ?>
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>ADD CATEGORY</h3>
                        <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" name="productName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Image</label>
                          <input type="file" name="productImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Description</label>
                          <input type="text" name="productDescription" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Qty</label>
                          <input type="text" name="productQty" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Price</label>
                          <input type="text" name="productPrice" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Select Category</label>
                          <select class="form-control" name="cId" id="">
                          <option>Select Category</option>
                          <?php
                          $query = $pdo->query("select * from Categories");
                          $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                          foreach($allCategories as $cat){
                          ?>
                          <option value="<?php echo $cat ['id']?>"> <?php echo $cat['name'] ?></option>
                          <?php
                          }
                          ?>
                          </select>
                        </div>
                        <button class="btn btn-info" type="submit" name="addProduct">Add Category</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php include('footer.php') ?>