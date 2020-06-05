<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php Flight::render( '_partials/script.php') ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle2.css?v=3" >
    <!-- JS -->
    <script src="assets/js/init2.js?v=3"></script>
    <!-- SEO -->
    <title>SERVICIOS</title>
</head>
<body>
<?php Flight::render( '_partials/tagmanager.php') ?>

    <?php Flight::render('_partials/header.php'); ?>

    <section class="sf-container-thanks">
        <div class="content">
            <div class="sf-content-thanks block-01">
                <h1>¡GRACIAS!</h1>
                <p>Se ha registrado tu solicitud. Tan pronto nos sea posible, nos pondremos en contacto contigo.</p>
                <h3>Contáctanos</h3>
                <div class="thanks-whatsapp">
                    <a class="sf-btn -whatsapp -web" href="https://api.whatsapp.com/send?phone=51997360983&amp;text=Hola, estoy interesado en información y mi proyecto es">
                        <i class="fab fa-whatsapp mr5" aria-hidden="true"></i>
                        <span>999-444-981</span>
                    </a>
                </div>
                <p><strong>E-mail:</strong> admin@gmail.com</p>
                <div class="sf_btn">
                    <button onclick="window.location.href='/'" class="mainButton btn-content-solid-rectagle-organge" type="submit">VOLVER A LA PÁGINA</button>
                </div>

            </div>
        </div>
    </section>

    <?php Flight::render('_partials/footer2.php'); ?>

</body>
</html>
