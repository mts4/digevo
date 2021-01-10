<?php $producto = get_field('producto'); ?>
<section id="productos">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-in" data-aos-delay="1000" data-aos-duration="1000"><?= $producto['title']; ?></h2>
        <div class="row">
            <?php foreach ($producto['list_products'] as $producto) : ?>
                <div class="col-12 col-md-4">
                    <div class="boxProduct" data-aos="fade-in" data-aos-delay="700" data-aos-duration="1000">
                        <img src="<?= $producto['image']; ?>" class="img-fluid boxProduct__image">
                        <a href="<?= $producto['bajada']; ?>" target="_blank" class="boxProduct__description"><?= $producto['bajada']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>