<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- El hero -->
    <section class="container-fluid bg--green">
        <div class="container mx-auto hero__sections">
            <section class="hero__sections--first">
                <h3 class="text--white text--md"><span style="color: #9497A1;">Inicio |</span> Acerca de nosotros</h3>
            </section>
            <section class="row">
                <div class="col-lg-6">
                    <h1 class="text--white text--lg">Acerca de nosotros</h1>
                </div>
                <div class="col-lg-6">
                    <p class="text--white text--sm">Somos una empresa que se dedica a la venta de productos de calidad, con la mejor atención al cliente y los mejores precios del mercado.</p>
                </div>
            </section>
        </div>
    </section>
    <section class="container row p-3 p-md-5 mx-auto">
        <div class="col-lg-6 p-2">
            <h3>Cónocenos</h3>
            <span id="greenRect"></span>
            <div class="text--sm text--grey my-4">
                <p>
                    Somos una empresa mexicana fundada en el 2000, como la primera y más grande red de asesores financieros en México.
                </p>
                <p>
                    Te ayudamos a elegir el mejor crédito hipotecario, empresarial, seguros y/o fondo de inversión, según tu perfil y necesidades.
                </p>
                <p>
                    Nos respaldan 23 años de experiencia y estamos avalados por las principales instituciones financieras y aseguradoras del país.
                </p>
                <p>
                    Nuestro acompañamiento es de principio a fin con las mejores herramientas tecnológicas para que compares y tomes la mejor decisión.
                </p>
                <p>
                    Nuestro servicio no tiene costo, sí, NO TIENE COSTO porque la institución financiera que elijas será la que cubrirá nuestros honorarios.
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo __ROOT__; ?>/public/img/about/conocenos.png" alt="about" class="w-100">
        </div>
    </section>
    <section class="mw--920 mx-auto p-3 p-md-5">
        <div class="row my-5">
            <div class="col-md-5">
                <h3 class="mb-3">Quienes somos</h3>
                <p class="text--grey">
                    Nos enfocamos en el posicionamiento de la marca en diferentes eventos y medios masivos de comunicación
                </p>
                <p class="text--grey">
                    Nos fortalecemos con webinars, e-learning y desarrollos propios para mantenernos actualizados y ofrecer un servicio especializado
                </p>
            </div>
            <div class="col-md-7">
                <img src="<?php echo __ROOT__; ?>/public/img/about/qsomos1.png" alt="quienes somos" class="w-100">
            </div>
        </div>
        <div class="row align-items-center my-5">
            <div class="col-md-7">
                <img src="<?php echo __ROOT__; ?>/public/img/about/qsomos2.png" alt="quienes somos" class="w-100">
            </div>
            <div class="col-md-5">
                <p class="text--grey p-3">
                Tenemos más de 23 años de experiencia formando líderes en asesoría financiera.
                </p>
            </div>
        </div>
    </section>
    <section class="bg--grey-cp p-3 p-md-5">
        <div class="mw--1024 mx-auto row">
            <div class="col-md-6 p-3">
                <h3>Nuestra misión</h3>
                <p class="text--sm text--grey">
                Mejorar el patrimonio de las familias y empresas en Latinoamérica.
                </p>
            </div>
            <div class="col-md-6 p-3">
                <h3>Nuestra visión</h3>
                <p class="text--sm text--grey">
                Ayudar a obtener el mejor producto financiero a las familias y empresas en Latinoamerica.
                </p>
            </div>
        </div>
    </section>
    <section class="mw--1024 mx-auto p-3 p-md-5">
        <div class="row">
            <div class="col-md-6 p-3">
                <h3>Instituciones con las que trabajamos</h3>
            </div>
            <div class="col-md-6 p-3">
                <p class="text--grey">
                    Colaboramos con una red de instituciones financieras líderes para ofrecerte las mejores opciones del mercado. Nos asociamos con bancos, cooperativas y entidades de crédito reconocidas, garantizando seguridad y confianza en cada operación.
                </p>
            </div>
            <!-- top -->
        </div>
        <div>
            <!-- bottom -->
             <ul class="list--unstyled d-flex flex-wrap justify-content-center">
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <li>
                        <img src="<?php echo __ROOT__; ?>/public/img/about/logo_<?php echo $i + 1; ?>.png" alt="instituciones" style="width: 140px">
                    </li>
                <?php endfor; ?>
             </ul>
        </div>
    </section>

    <?php include 'components/necesitas.php'; ?>
    
</main>

<?php include 'partials/footer.php'; ?>