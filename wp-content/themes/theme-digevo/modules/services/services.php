<?php $services = get_field('services'); ?>
<section id="services">
    <div class="container">
        <h2 class="text-center" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="1000"><?= $services['descripcion']; ?></h2>
        <div class="row mt-5">
            <?php foreach ($services['list_services'] as $index => $service) : ?>
                <div class="col-12 col-lg-4">
                    <div class="boxServices" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="1<?=$index;?>00">
                        <div class="boxServices__bullet">
                            <img src="<?= get_template_directory_uri(); ?>/dist/img/check.png" class="img-fluid boxServices__bullet__icon">
                        </div>
                        <div class="boxServices__information">
                            <p><?=$service['service'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>