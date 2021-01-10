<section id="digevoLive" class="wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="2">
    <?php $image_top = get_field('image_top'); ?>
    <div class="boxImage" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="1000">
        <img src="<?= $image_top['banner']; ?>" class="img-fluid boxImage__image" />
    </div>
    <div class="boxInformation" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1100">
        <img src="<?= $image_top['image_box']; ?>" class="img-fluid boxInformation__image">
    </div>
</section>