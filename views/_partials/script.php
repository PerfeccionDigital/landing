<!-- Owl Stylesheets -->
<link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">

<!-- JS - fontawesome -->
<script src="https://kit.fontawesome.com/4a94473818.js"></script>
<script src="/assets/vendors/jquery.min.js"></script>
<script src="/assets/owlcarousel/owl.carousel.js"></script>
<script src="/assets/js/jquery.validate.js"></script>

<!-- snatchbot -->
<script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(67610)</script> 

<!-- Image icon -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
 
<?php 
if (FrontController::isEnviromentRemote()) : ?>
    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143017368-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-143017368-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MM25B4B');</script>
    <!-- End Google Tag Manager -->
<?php endif; ?>

<?php 
if (FrontController::isProduction()) : ?>
    <!-- Hotjar Tracking Code for https://serviciosfe.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1424143,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
<?php endif; ?>