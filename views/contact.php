<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="mw--920 mx-auto p-3 p-md-5">
        <div class="mb-5">
            <h3 class="text-black text--md"><span class="text--grey">Inicio |</span> Contacto</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Contacto</h2>
                <div class="mb-4">
                    <h4>Email</h4>
                    <a class="a--grey" href="mailto:gpenunuri@socasesores.com">gpenunuri@socasesores.com</a>
                </div>
                <div class="mb-4">
                    <h4>Teléfono</h4>
                    <a class="a--grey" href="tel:6641171189">66 41 17 11 89</a>
                </div>
                <div class="mb-4">
                    <h4>Dirección</h4>
                    <p class="text--grey">
                        Blvd. Agua Caliente 9955 507 CALETE 22044 Tijuana Baja California
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Nombre</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="email" class="text--grey m-0">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="py-2">
                    <div class="d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Asunto</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                </div>
                <div class="py-2">
                    <div class="d-flex flex-column justify-content-between">
                        <label for="message" class="text--grey m-0">Mensaje</label>
                        <textarea name="message" id="message" cols="30" rows="2" required></textarea>
                
                    </div>
                </div>
                <div class="py-2 d-flex justify-content-end">
                    <button class="btn--primary">Enviar</button>
                </div>  

            </div>
        </div>
    </section>
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22946.882811060754!2d-117.0283418036602!3d32.523107511665714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9484795f1103f%3A0xffe931f50a93bcb0!2sBlvd.%20Agua%20Caliente%209955%2C%20Calete%2C%2022044%20Tijuana%2C%20B.C.!5e0!3m2!1ses-419!2smx!4v1728522114243!5m2!1ses-419!2smx" height="450" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php include 'partials/footer.php'; ?>