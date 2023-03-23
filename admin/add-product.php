<?php
include_once("../dal/dal.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $SKU = $_POST['SKU'];
  $category_id = $_POST['category_id'];
  $inventory = $_POST['inventory'];
  $price = $_POST['price'];
  $discount_id = $_POST['discount_id'];
  $featured = $_POST['featured'];

  AddProduct($name, $description, $SKU, $category_id, $inventory, $price, $discount_id, $featured);
  header('location:product-list.php');
}

$categories = GetCategories();
$discounts = GetDiscounts();

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Add Product</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name"  placeholder="Product Name" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" class="form-control" placeholder="Product Description" aria-label="Product Description" aria-describedby="basic-icon-default-message2" name="description"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">SKU</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="SKU"  placeholder="SKU" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Category Id</label>
              <div class="col-sm-10">
                <select class="form-select" name="category_id">
                  <option value="0">Select Category</option>
                  <?php foreach($categories as $category){ ?>
                  <option value="<?= $category['id'] ?>"><?= $category['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Inventory</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="inventory" id="basic-default-name" placeholder="Product quantity" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="price" placeholder="Add Price" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Id</label>
              <div class="col-sm-10">
                <select class="form-select" name="discount_id">
                  <option value="0">Select Discount Id</option>
                  <?php foreach($discounts as $discount){ ?>
                  <option value="<?= $discount['id'] ?>"><?= $discount['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Featured</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="featured" value="1"/> <label class="form-check-label" for="inlineRadio1">Featured Product</label>
              <input class="form-check-input" type="radio" name="featured" value="0"/> <label class="form-check-label" for="inlineRadio2">Not Featured Product</label>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Product</button>
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