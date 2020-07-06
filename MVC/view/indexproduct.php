<?php
require_once "./controller/productController.php";
?>

<div class="products">
        <?php foreach ($products as $product) : ?>

            <div class="product-pro">
                <a href="http://localhost:9999/category/chitiet.php?id=<?=$product["idbooks"]?>"><img src="<?= "../".$product["book_image"]; ?>"></a>
                <p><?= $product["book_name"]?></p>
                <p><?= $product["book_price"]?> VND</p>
                <p class="idproduct"><?= $product["idbooks"]?></p>
            </div>        
           

        <?php endforeach; ?>
    </div>
