<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

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


    <div class="container mx-auto"><?php include 'components/faqs.php'; ?></div>

    <?php include 'components/necesitas.php'; ?>

</main>

<?php include 'partials/footer.php'; ?>