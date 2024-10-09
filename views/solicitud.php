<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- El hero -->
    <section class="container-fluid bg--green">
        <div class="container mx-auto hero__sections">
            <section class="hero__sections--first">
                <h3 class="text--white text--sm"><span style="color: #9497A1;">Inicio |</span> Solicitud de credito</h3>
            </section>
            <section class="row py-2">
                <div class="col-lg-6">
                    <h1 class="text--white text--lg">Solicitud de credito</h1>
                </div>
                <div class="col-lg-6">
                    <p class="text--white text--sm">Sed ut perspiciatis unde omnis iste natus error volupta accusantium doloremque laudantium, totam remiga aperiam, eaque ipsa.</p>
                </div>
            </section>
        </div>
    </section>


    <section class="mw--1440 my-5">
        <div class="text-center m-5 p-5">
            <h1>Rellena los siguientes campos</h1>
            <p class="text--sm ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
        </div>
    </section>


    <section class="mw--1440 row my-0">
        <div class="col-md-6 p-5">
            <h1 class="text--2xl text--bold">Información <br><span class="text--green">Personal<span></h1>
        </div>        
        <div class="col-md-6">
            <div class="p-5">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Nombre</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Fecha de nacimiento</label>
                        <input type="date" id="fecha" name="fecha" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="identificacion" class="text--grey m-0">Número de Identificación (DNI, INE, etc.)</label>
                        <input type="text" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="nacionalidad" class="text--grey m-0">Nacionalidad</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>                        
                    </div>
                </div>                
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="estado" class="text--grey m-0">Estado civil</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="telefono" class="text--grey m-0">Teléfono de Contacto</label>
                        <input type="text" id="telefono" name="telefono" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 d-flex flex-column">
                        <label for="email" class="text--grey m-0">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <hr class="custom-hr mw--1440">

    <section class="mw--1440 row my-0">
        <div class="col-md-6 p-5">
            <h1 class="text--2xl text--bold">Información <br><span class="text--green">Laboral<span></h1>
        </div>        
        <div class="col-md-6">
            <div class="p-5">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Empleador Actual:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="estado" class="text--grey m-0">Dirección del Empleador:</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>

                </div>
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="identificacion" class="text--grey m-0">Teléfono del Empleador:</label>
                        <input type="text" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="nacionalidad" class="text--grey m-0">Cargo/Posición</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>                        
                    </div>
                </div>                
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Fecha de ingreso</label>
                        <input type="date" id="fecha" name="fecha" required>                        
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="telefono" class="text--grey m-0">Ingreso Mensual Neto</label>
                        <input type="number" id="telefono" name="telefono" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-12 d-flex flex-column">
                        <label for="email" class="text--grey m-0">Otros ingresos (especificar fuente y monto)</label>
                        <input type="texto" id="email" name="email" required>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="custom-hr mw--1440">

    
    <section class="mw--1440 row my-0">
        <div class="col-md-6 p-5">
            <h1 class="text--2xl text--bold">Información <br><span class="text--green">Financiera<span></h1>
        </div>        
        <div class="col-md-6">
            <div class="p-5">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Banco Principal:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Número de Cuenta Bancaria:</label>
                        <input type="text" id="fecha" name="fecha" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="identificacion" class="text--grey m-0">Ingresos Mensuales Totales:</label>
                        <input type="text" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="nacionalidad" class="text--grey m-0">Gastos Mensuales Totales:</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>                        
                    </div>
                </div>                
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="estado" class="text--grey m-0">Deudas Actuales (tipo, monto y acreedor):</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="telefono" class="text--grey m-0">Propiedades y Activos (descripción y valor):</label>
                        <input type="text" id="telefono" name="telefono" required>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="custom-hr mw--1440">

    <section class="mw--1440 row my-0">
        <div class="col-md-6 p-5">
            <h1 class="text--2xl text--bold">Detales del <br><span class="text--green">Crédito Solicitado<span></h1>
        </div>        
        <div class="col-md-6">
            <div class="p-5">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Monto del Crédito Solicitado:</label>
                        <input type="number" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Plazo del Crédito (meses/años):</label>
                        <input type="text" id="fecha" name="fecha" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="identificacion" class="text--grey m-0">Propósito del Crédito:</label>
                        <input type="text" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="nacionalidad" class="text--grey m-0">Tipo de Crédito (cambio de hipoteca, liquidez,etc</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="custom-hr mw--1440">

    <section class="mw--1440 row my-0">
        <div class="col-md-6 p-5">
            <h1 class="text--2xl text--bold">Información de <br><span class="text--green">Referencias<span></h1>
        </div>        
        <div class="col-md-6">
            <div class="p-5">
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Nombre de la Primera Referencia Personal:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="name" class="text--grey m-0">Relación con la Referencia:</label>
                        <input type="text" id="fecha" name="fecha" required>                        
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="identificacion" class="text--grey m-0">Teléfono de la Referencia:</label>
                        <input type="text" id="identificacion" name="identificacion" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="nacionalidad" class="text--grey m-0">Nombre de la Segunda Referencia Personal:</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" required>                        
                    </div>
                </div>                
                <div class="row py-2">
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="estado" class="text--grey m-0">Relación con la Referencia:</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <label for="telefono" class="text--grey m-0">Teléfono de la Referencia:</label>
                        <input type="text" id="telefono" name="telefono" required>                        
                    </div>
                </div>
                <div class="row py-2 d-flex justify-content-end">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn--primary">
                        Enviar solictud <i class=" pl-2 pt-2 fa-solid fa-arrow-right fa-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr class="custom-hr mw--1440">



</main>

<?php include 'partials/footer.php'; ?>