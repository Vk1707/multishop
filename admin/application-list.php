<?php
include_once("../templates/admin/header.php");
include_once("../dal/dal.php");

$products = GetProducts();

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Product List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subtitle</th>
                <th>Display subtitle</th>
                <th>Category Name</th>
                <th>Inventory </th>
                <th>Price</th>
                <th>Discount Percent</th>
                <th>Featured</th>
                <th>Edit or Delete</th>                                
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php 
            foreach($products as $product){ 
                if(empty($product['deleted_at'])) { ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td>
                    <?= $product['name']; ?>
                </td>
                <td>
                    <?= $product['SKU']; ?>
                </td>
                <td>
                    <?= GetCategoryName($product['category_id']) ?>
                </td>
                <td>
                    <?= $product['inventory'] ?>
                </td>
                <td>
                    <?= $product['price']; ?>
                </td>
                <td>
                    <?= GetDiscountPercent($product['discount_id']) ?>
                </td>
                <td>
                    <?= $product['featured'] ?>  
                </td>
                <td>
                    <a class="dropdown-item admin-actions" href="product-images.php?id=<?= $product['id'] ?>"><i class="bx bx-image me-2"></i></a>
                    <!-- <a class="dropdown-item admin-actions" href="update-product-images.php?id=<?= $product['id'] ?>"><i class="bx bxs-image-add me-2"></i></a> -->
                    <a class="dropdown-item admin-actions" href="update-product.php?id=<?= $product['id'] ?>"><i class="bx bx-edit-alt me-2"></i></a>
                    <a class="dropdown-item admin-actions" href="delete-product.php?id=<?= $product['id'] ?>"><i class="bx bx-trash me-2"></i></a>
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