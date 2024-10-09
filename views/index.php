<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <section class="mw--1440 row align-items-center position-relative">
        <div class="home__hero">
            <div class="p-sm-5">
                <div class="p-5">
                    <h2>Antes de comprar una casa piensa en <span class="text--green">SOC</span></h2>
                    <p class="text--grey text--sm">
                        Somos el Broker líder en asesoría hipotecaria en México
                    </p>
                    <div class="d-sm-none my-4">
                        <a href="<?php echo __ROOT__; ?>/contacto" class="btn--primary">
                            Conoce más
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/home/hero.png" alt="hero" class="w-100">
            </div>
        </div>
        <div id="conoceMasHero" class="d-none d-sm-block">
            <a href="<?php echo __ROOT__; ?>/contacto">
                Conoce más
            </a>
        </div>
    </section>
    <section class="mw--1440 row my-5">
        <div class="col-md-6 p-0">
            <img src="<?php echo __ROOT__; ?>/public/img/home/conoce.png" alt="hero" class="w-100">
        </div>
        <div class="col-md-6 bg--grey-cp d-flex align-items-center">
            <div class="p-5">
                <h3 class="text--lg">Conoce al mejor equipo para comprar un <span class="text--green">inmueble</span></h3>
                <p class="text--sm text--grey my-4">
                    Contamos con el mejor equipo de profesionales para acompañarte en cada paso del proceso de compra de tu inmueble. Desde expertos en bienes raíces y asesores financieros hasta abogados especializados en propiedad, nuestro equipo se dedica a brindarte una experiencia personalizada y sin complicaciones.
                </p>
                <div>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn--primary">
                        Conoce más
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mw--1024 my-4">
        <h3 class="text--lg text-center">Ofrecemos servicios que garantizan tu éxito.</h3>
        <div class="row p-3 p-md-5">
            <div class="col-sm-4 col-lg-2">
                <h4 class="text--green text--xl">1830+</h4>
                <p class="text--sm text--grey">Asesorías personalizadas</p>
            </div>
            <div class="col-sm-4 col-lg-2">
                <h4 class="text--green text--xl">834+</h4>
                <p class="text--sm text--grey">Créditos aprobados</p>
            </div>
            <div class="col-sm-4 col-lg-2">
                <h4 class="text--green text--xl">7</h4>
                <p class="text--sm text--grey">Días de tiempo de procesamiento</p>
            </div>
            <div class="col-lg-6">
                <p class="text--sm text--grey">
                    Con un equipo de expertos comprometidos y una metodología orientada al éxito, nos aseguramos de que cada proyecto que emprendemos no solo cumpla, sino que supere tus expectativas.
                </p>
            </div>
        </div>
    </section>
    <section class="mw--1024 my-4">
        <h3 class="text--lg my-4">Productos hipotecarios</h3>
        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/splide1.png" alt="hipotecario1" class="w-100">
                        <h4 class="text--md my-2">Cambio de hipoteca</h4>
                        <p class="text--grey text--sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas. Quis autem vel eum iure...</p>
                        <a href="<?php echo __ROOT__; ?>/contacto" class="a--primary-green">
                            Contáctanos &#10132;
                        </a>
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/splide2.png" alt="hipotecario2" class="w-100">
                        <h4 class="text--md my-2">Liquidez</h4>
                        <p class="text--grey text--sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas. Quis autem vel eum iure...</p>
                        <a href="<?php echo __ROOT__; ?>/contacto" class="a--primary-green">
                            Contáctanos &#10132;
                        </a>
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/splide3.png" alt="hipotecario2" class="w-100">
                        <h4 class="text--md my-2">Adquisición de terreno</h4>
                        <p class="text--grey text--sm">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas. Quis autem vel eum iure...</p>
                        <a href="<?php echo __ROOT__; ?>/contacto" class="a--primary-green">
                            Contáctanos &#10132;
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
</main>
<script src="<?php echo __ROOT__; ?>/public/js/splide/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('.splide', {
            perPage: 3,
            gap: '1rem',
            perMove: 1,
            type: 'loop',
        }).mount();
    });
</script>
<?php include 'partials/footer.php'; ?>