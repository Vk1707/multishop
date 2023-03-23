<?php
include_once("../dal/dal.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $product_id = $_POST['product_id'];

  $image = $_FILES['image'];
  move_uploaded_file($image['tmp_name'], '../uploads/products/' . $image['name']);
  
  AddProductImg($product_id, $image['name']);
  header('location:product-images-list.php');
}

$product_id = $_GET['id'];

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Add Product Images</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Product</label>
              <div class="col-sm-10">
                <input class="form-control" name="product_id" type="text" value="<?= $product_id ?>"  readonly />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Images</label>
              <div class="col-sm-10">
                <input class="form-control" name="image" type="file" id="formFile" />
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Upload Product Image</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Content -->
<?php
include_once("../templates/admin/footer.php");
?>