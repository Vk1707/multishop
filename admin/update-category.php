<?php
include_once("../dal/dal.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];

  $image = $_FILES['image'];
  if(!empty($image['name'])){
    move_uploaded_file($image['tmp_name'], '../uploads/category_img' . $image['name']);
    $imageName = $image['name'];
  }
  else{
    $imageName = $_POST['old_image'];
  }
  
  UpdateCategory($id, $name, $description, $imageName);
  header('location:category-list.php');
}
else{
    $id = $_GET['id'];
    
    $category = GetCategory($id);
}

include_once("../templates/admin/header.php");
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">Update Category</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="basic-default-name" value="<?= $category['name']; ?>" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" class="form-control" placeholder="" aria-label="" aria-describedby="basic-icon-default-message2" name="description"><?= $category['description'] ?></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Images</label>
              <div class="col-sm-10">
                <input class="form-control" name="image" type="file" id="formFile" />
                <input type="hidden" name="old_image" value="<?= $category['image']; ?>">
                <img src="../uploads/category_img/<?= $category['image'] ?>" width="100px">
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
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