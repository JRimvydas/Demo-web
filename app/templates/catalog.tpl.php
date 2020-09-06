<div class="container">
    <?php foreach ($data ?? [] as $product_key => $product): ?>
        <div class="card">
            <h2><?php print $product['price'] . ' €'; ?></h2>
<!--            <div class="product_image">-->
                <img src="<?php print $product['url']; ?>" alt="">
<!--            </div>-->
            <div class="info">
                <p><?php print $product['name']; ?></p>
                <p><?php print $product['model'] ; ?></p>
                <p><?php print $product['producer'] ; ?></p>
            </div>
            <div class="card_footer">
                <p>Sandelyje: <?php print $product['inStock']; ?> </p>
            </div>
            <?php if (\App\App::$session->getUser()) : ?>
            <?php print $product['cart']; ?>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>