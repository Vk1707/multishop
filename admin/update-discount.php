<?php
include_once("../dal/dal.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id'];  
  $name = $_POST['name'];
  $description = $_POST['description'];
  $discount_percent = $_POST['discount_percent'];
  $active = $_POST['active'];

  UpdateDiscount($id,$name, $description, $discount_percent, $active);
  header('location:discount-list.php');
}
else{
    $id = $_GET['id'];
    $discount = GetDiscount($id);
}

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Update Discount</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $discount['id'] ?>">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="basic-default-name" value="<?= $discount['name']; ?>"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" class="form-control"  aria-describedby="basic-icon-default-message2" name="description"><?= $discount['description']; ?></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="html5-number-input" class="col-sm-2 col-form-label">Discount Percent</label>
              <div class="col-sm-10">
                <input class="form-control" type="number" name="discount_percent" id="html5-number-input" value="<?= $discount['discount_percent']; ?>"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Active Status</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="active" value="T" <?= $discount['active']=='T'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio1">Active</label>
              <input class="form-check-input" type="radio" name="active" value="F" <?= $discount['active']=='F'?'checked':'' ?> /> <label class="form-check-label" for="inlineRadio2">Not Active</label>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update Discount</button>
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