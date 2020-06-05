<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php Flight::render( '_partials/script.php') ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/newstyle.css?v=3" >
    <!-- JS -->
    <script src="/assets/js/init.js?v=3"></script>

    <!-- SEO -->
    <title>SERVICIOS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Properties for social -->
    <meta property="og:site_name" content="Entel Perú"/>
    <meta property="og:title" content="Ofertas y promociones"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="">
    <meta property="og:type" content="page"/>
</head>
<body>
<?php Flight::render( '_partials/tagmanager.php') ?>

    <?php Flight::render('_partials/header.php'); ?>


    <section class="sf-container-thanks">
        <div class="content">
            <div class="sf-content-thanks">
                <p class="thanks-tit">¡GRACIAS!</p>
                <p class="thanks-desc">Se ha registrado tu solicitud. Tan pronto nos sea posible, nos pondremos en contacto contigo.</p>
                <div class="thanks-subtit">Contáctanos</div>
                <div class="thanks-whatsapp">
                    <a class="sf-btn -whatsapp -web" href="https://api.whatsapp.com/send?phone=51997360983&amp;text=Hola, estoy interesado en información y mi proyecto es">
                        <i class="fab fa-whatsapp mr5 -gtm-l1-gracias-whatsapp" aria-hidden="true"></i>
                        <span class="-gtm-l1-gracias-whatsapp">999-444-981</span>
                    </a>
                </div>
                <div class="thanks-email"><strong>E-mail:</strong> admin@gmail.com</div>
                <div class="thanks-btn">
                    <button onclick="window.location.href='/remodelacion/gracias'" class="mainButton btn-content-solid-2 -gtm-l1-gracias-btn-volver" type="submit">VOLVER A LA PÁGINA</button>
                </div>
            </div>
        </div>
    </section>


    <?php Flight::render('_partials/footer.php'); ?>

</body>
</html>
