<?php
include_once("../templates/admin/header.php");
include_once("../dal/dal.php");

$ProductImages = GetImages();

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Product Images List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Id</th>
                <th>Image</th>
                <th>Edit or Delete</th>                                
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php 
            foreach($ProductImages as $ProductImage){ ?>
            <tr>
                <td><?= $ProductImage['id'] ?></td>
                <td>
                    <?= $ProductImage['product_id']; ?>
                </td>
                <td>
                    <img src="../uploads/products/<?= $ProductImage['url'] ?>" alt="Avatar" class="" width="80px" height="80px" style="border-radius: 2%;" />
                </td>
                <td>
                    <div class="dropdown">
                        <a class="dropdown-item" href="update-product-image.php?id=<?= $ProductImage['id'] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                        <a class="dropdown-item" href="delete-Product-image.php?id=<?= $ProductImage['id'] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include_once("../templates/admin/footer.php");
?>