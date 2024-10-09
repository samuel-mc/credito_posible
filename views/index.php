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
        <div class="col-md-6 bg--grey-cp">
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
</main>
<?php include 'partials/footer.php'; ?>