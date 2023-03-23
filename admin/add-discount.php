<?php
include_once("../dal/dal.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $discount_percent = $_POST['discount_percent'];
  $active = $_POST['active'];

  AddDiscount($name, $description, $discount_percent, $active);
  header('location:discount-list.php');
}

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"> <span><img src="https://img.icons8.com/bubbles/70/000000/plus.png"/> </span> Add Discount</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="basic-default-name" placeholder="Product Name" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" class="form-control" placeholder="Product Description" aria-label="Product Description" aria-describedby="basic-icon-default-message2" name="description"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label for="html5-number-input" class="col-sm-2 col-form-label">Discount Percent</label>
              <div class="col-sm-10">
                <input class="form-control" type="number" name="discount_percent" id="html5-number-input" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="active" id="inlineRadio1" value="T"/> <label class="form-check-label" for="inlineRadio1">Active</label>
              <input class="form-check-input" type="radio" name="active" id="inlineRadio2" value="F"/> <label class="form-check-label" for="inlineRadio2">Not Active</label>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Discount</button>
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