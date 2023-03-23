<?php
include_once("../templates/admin/header.php");
include_once("../dal/dal.php");

$discounts = GetDiscounts();

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Discount List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Discount Percent</th>
                <th>Active</th>
                <th>Edit or Delete</th>                                
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php 
            foreach($discounts as $discount){ 
                if(empty($discount['deleted_at'])) { ?>
            <tr>
                <td><?= $discount['id'] ?></td>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong><?= $discount['name']; ?></strong>
                </td>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong><?= $discount['description']; ?></strong>
                </td>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong><?= $discount['discount_percent']; ?></strong>
                </td>
                <td>
                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong><?= $discount['active']; ?></strong>
                </td>
                <td>
                    <div class="dropdown">
                        <a class="dropdown-item" href="update-discount.php?id=<?= $discount['id'] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                        <a class="dropdown-item" href="delete-discount.php?id=<?= $discount['id'] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
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