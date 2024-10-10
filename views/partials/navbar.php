<?php $title = isset($title) ? $title : 'Tanko';
?>

<header class="bg-white py-3 mx-5 my-3 d-none d-lg-block">
    <div class="mw--1440 row align-items-center">
        <div class="col-md-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-100 mw--280">
        </div>
        <nav class="col-md-8 mx-auto">
            <ul class="d-flex justify-content-center text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Home</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Acerca de nosotros' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/nosotros">Acerca de nosotros</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Productos hipotecarios' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/productos">Productos hipotecarios</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'FAQs' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/faq">FAQs</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Solicitud de crédito' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/solicitud">Solicitud de crédito</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Contacto' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Contacto</a></li>
            </ul>
        </nav>

        <div class="col-md-2">
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn--primary">
                Contáctanos
            </a>
        </div>
    </div>
</header>

<header class="p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" style="width: 200px;">
        <button class="btn btn--primary btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed bg-white w-100 py-4" id="mobileMenu" style="top: 0; z-index: 20">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" style="width: 200px;">
            <button class="btn btn-danger btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Acerca de nosotros' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/nosotros">Acerca de nosotros</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Productos hipotecarios' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/productos">Productos hipotecarios</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'FAQs' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/faq">FAQs</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Solicitud de crédito' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/solicitud">Solicitud de crédito</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Contacto' ? 'a--primary-green text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-dark btn--rounded btn--primary py-2 px-4 w--fit h--fit text--bold">
                Contáctanos
            </a>
        </div>
    </div>
</nav>