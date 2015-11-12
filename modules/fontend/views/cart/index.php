<?php ?>

<div class="row">
    <div class="container">
        <?php foreach ($data as $value) { ?>
            <div><?php echo $value['name'] ?></div>
            <div><?php echo $value['price'] ?></div>
            <div><?php echo $value['product_sl'] ?></div>
            <div><?php echo $value['money_all'] ?></div>
        <?php } ?>
    </div>
</div>
