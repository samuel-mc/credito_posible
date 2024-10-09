<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<style>
.accordion-button {
    font-weight: bold;
    border: none !important;
    box-shadow: none !important;
}
.accordion-button:not(.collapsed) {
    background-color: white; /* Cambiar color de fondo */
    color: #006D4E;
    transition: background-color 0.3s ease, color 0.3s ease; /* Transiciones suaves */
    border: none
}

.accordion-item{
    margin: 20px 0px !important;
    border: 1px solid #ccc !important;
}

.accordion-button:not(.collapsed)::after {
transform: rotate(360deg);
background-image: url("<?php echo __ROOT__; ?>/public/img/minus-solid.svg");
color: #006D4E;
background-size: auto;
background-position: center;
}

.accordion-button.collapsed::after {
background-image: url("<?php echo __ROOT__; ?>/public/img/plus-solid.svg");
background-size: auto;
background-position: center;
}
</style>

<main>
    <!-- El hero -->
    <section class="container-fluid bg--green">
        <div class="container mx-auto hero__sections">
            <section class="hero__sections--first">
                <h3 class="text--white text--sm"><span style="color: #9497A1;">Inicio |</span> Preguntas frecuentes</h3>
            </section>
            <section class="row py-2">
                <div class="col-lg-6">
                    <h1 class="text--white text--lg">Preguntas frecuentes</h1>
                </div>
                <div class="col-lg-6">
                    <p class="text--white text--sm">Sed ut perspiciatis unde omnis iste natus error volupta accusantium doloremque laudantium, totam remiga aperiam, eaque ipsa.</p>
                </div>
            </section>
        </div>
    </section>


    <section class="mw--1440 my-5">
        <div class="text-center m-5 p-5">
            <h3 class="text--green text--lg">FAQs</h3>
            <h1>Rellena los siguientes campos</h1>
            <p class="text--sm ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
        </div>
    </section>


    <section class="mw--1440 my-5">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Qué es un crédito personal?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text--grey">Phasellus tristique eu nisl eu consectetur. Morbi urna massa, imperdiet in mauris et, euismod vestibulum lacus. Integer enim elit, tincidunt aliquam ligula id, lacinia auctor orci. Sed quis lobortis eros. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item my-2">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text--grey">Phasellus tristique eu nisl eu consectetur. Morbi urna massa, imperdiet in mauris et, euismod vestibulum lacus. Integer enim elit, tincidunt aliquam ligula id, lacinia auctor orci. Sed quis lobortis eros. </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item my-2">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text--grey">Phasellus tristique eu nisl eu consectetur. Morbi urna massa, imperdiet in mauris et, euismod vestibulum lacus. Integer enim elit, tincidunt aliquam ligula id, lacinia auctor orci. Sed quis lobortis eros. </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<?php include 'partials/footer.php'; ?>