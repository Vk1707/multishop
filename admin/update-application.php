<?php
include_once("../dal/dal.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id'];  
  $name = $_POST['name'];
  $subtitle = $_POST['subtitle'];
  $display_subtitle = $_POST['display_subtitle'];
  $logo = $_POST['logo'];
  $display_logo = $_POST['display_logo'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  UpdateApplication($id,$name,$subtitle,$display_subtitle,$logo,$display_logo,$email,$phone,$address);
  header('location:application-list.php');
}
else{
    $id = $_GET['id'];
    $application = GetApplication($id);
}


include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Update Application</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $application['id'] ?>">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="basic-default-name" value="<?= $application['name']; ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Subtitle</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="subtitle" id="basic-default-name" value="<?= $application['subtitle']; ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Display Subtitle</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="display_subtitle" value="1" <?= $application['display_subtitle']=='1'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio1">Yes</label>
              <input class="form-check-input" type="radio" name="display_subtitle" value="0" <?= $application['display_subtitle']=='0'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Logo</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="logo" id="basic-default-name" value="<?= $application['logo']; ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Category Id</label>
              <div class="col-sm-10">
                <select class="form-select" name="category_id">
                  <option value="0">Select Category</option>
                  <?php foreach($categories as $category){ ?>
                  <option value="<?= $category['id'] ?>" <?= $category['id']==$application['category_id']?'selected':'' ?>><?= $category['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Inventory</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="inventory" id="basic-default-name" value="<?= $application['inventory']; ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="price" id="basic-default-name" value="<?= $application['price']; ?>"  />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Id</label>
              <div class="col-sm-10">
                <select class="form-select" name="discount_id">
                  <option value="0">Select Discount Id</option>
                  <?php foreach($discounts as $discount){ ?>
                  <option value="<?= $discount['id'] ?>" <?= $discount['id']==$application['discount_id']?'selected':'' ?>><?= $discount['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Featured</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="featured" value="1" <?= $application['featured']=='1'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio1">Featured Product</label>
              <input class="form-check-input" type="radio" name="featured" value="0" <?= $application['featured']=='0'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio2">Not Featured Product</label>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update Product</button>
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