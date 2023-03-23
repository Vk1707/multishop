<?php
include_once("../dal/dal.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $subtitle = $_POST['subtitle'];
  $display_subtitle = $_POST['display_subtitle'];

  $display_logo = $_POST['display_logo'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $logo = $_FILES['logo'];
  move_uploaded_file($logo['tmp_name'], '../uploads/application/' . $logo['name']);
  
  AddApplication($name,$subtitle,$display_subtitle,$logo,$display_logo,$email,$phone,$address);
  header('location:application-list.php');
}

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Add Application</h4>
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
              <label class="col-sm-2 col-form-label" for="basic-default-message">Subtitle</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-message" class="form-control" placeholder="Subtitle" name="subtitle" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Display Subtitle</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="display_subtitle" id="inlineRadio1" value="0"/> <label class="form-check-label" for="inlineRadio1">Active</label>
              <input class="form-check-input" type="radio" name="display_subtitle" id="inlineRadio2" value="1"/> <label class="form-check-label" for="inlineRadio2">Not Active</label>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">logo</label>
              <div class="col-sm-10">
                <input class="form-control" name="logo" type="file" id="formFile" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Display logo</label>
              <div class="col-sm-10">
              <input class="form-check-input" type="radio" name="display_logo" id="inlineRadio1" value="0"/> <label class="form-check-label" for="inlineRadio1">Active</label>
              <input class="form-check-input" type="radio" name="display_logo" id="inlineRadio2" value="1"/> <label class="form-check-label" for="inlineRadio2">Not Active</label>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Email</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-message" name="email" class="form-control" placeholder="Email" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Phone No.</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-message" class="form-control" placeholder="Phone NO." name="phone" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
              <div class="col-sm-10">
                <textarea type="text" id="basic-default-message" class="form-control" placeholder="Address" name="address"></textarea> 
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Application</button>
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