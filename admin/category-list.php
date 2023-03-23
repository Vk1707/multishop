<?php
include_once("../templates/admin/header.php");
include_once("../dal/dal.php");

$categories = GetCategories();

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Product Category List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit or Delete</th>                                
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php 
            foreach($categories as $category){ 
                if(empty($category['deleted_at'])) { ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td>
                    <?= $category['name']; ?>
                </td>
                <td><?= $category['description'] ?></td>
                <td>
                    <img src="../uploads/category_img/<?= $category['image'] ?>" alt="Avatar" class="" width="80px" height="80px" style="border-radius: 50%;" />
                </td>
                <td>
                    <div class="dropdown">
                        <a class="dropdown-item" href="update-category.php?id=<?= $category['id'] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                        <a class="dropdown-item" href="delete-category.php?id=<?= $category['id'] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                </td>
            </tr>
            <?php
                } 
            } 
            ?>
        </tbody>
    </table>
</div>

<?php
include_once("../templates/admin/footer.php");
?>