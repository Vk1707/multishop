<?php
include_once("../templates/admin/header.php");
include_once("../dal/dal.php");

$applications = GetApplications();

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Application List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subtitle</th>
                <th>Display subtitle</th>
                <th>Logo</th>
                <th>Display Logo </th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Address</th>
                <th>Edit or Delete</th>                                
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php 
            foreach($applications as $application){ 
                if(empty($application['deleted_at'])) { ?>
            <tr>
                <td><?= $application['name'] ?></td>
                <td>
                    <?= $application['subtitle']; ?>
                </td>
                <td>
                    <?= $application['display_subtitle']; ?>
                </td>
                <td>
                    <?= $application['logo'] ?>
                </td>
                <td>
                    <?= $application['display_logo'] ?>
                </td>
                <td>
                    <?= $application['email']; ?>
                </td>
                <td>
                    <?= $application['phone'] ?>
                </td>
                <td>
                    <?= $application['address'] ?>  
                </td>
                <td>
                    <!-- <a class="dropdown-item admin-actions" href="product-images.php?id=<?= $product['id'] ?>"><i class="bx bx-image me-2"></i></a> -->
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