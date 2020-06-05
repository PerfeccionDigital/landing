<?php

require 'env.php';

// CONFIG MAIL
define('MAIL_HOST','smtp.mandrillapp.com'); // 'smtp.mandrillapp.com')
define('MAIL_USERNAME','serviciosfelixsa@gmail.com'); // usuario smtp
define('MAIL_PASS','Serviciosfelix2019'); // password smtp

// CONFIG MAIL de la persona quien lo envia
define('MAIL_FROM_EMAIL', 'contacto@serviciosfe.com'); // correo origen
define('MAIL_FROM_NAME', 'Servicio Felix'); // nombre origen

// Titulo del mensaje
define('MAIL_SUBJECT','Nuevo Cliente'); // asunto

// credenciales para el reporte de excel en la ruta /exportar_inscritos
define('USER_DOWNLOAD', 'felix');
define('PASS_DOWNLOAD', 'computadora');

switch (ENV) {
    case 'local':
        // CONFIG BD
        define('DB_HOST', 'mysql');
        define('DB_NAME', 'servife');
        define('DB_USER', 'user_servife');
        define('DB_PASS', 'computadora');
        // Email
        $correos = 'juankp3@gmail.com,vangela.06@gmail.com,ladislaox@gmail.com';
        define('RECEPTIONISTS', $correos);

        break;
    case 'dev':
        // CONFIG BD
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'test_servife');
        define('DB_USER', 'user_servife');
        define('DB_PASS', 'AW9h([A.G7zb');
        // Email
        $correos = 'juankp3@gmail.com,vangela.06@gmail.com,ladislaox@gmail.com';
        define('RECEPTIONISTS', $correos);

        break;
    case 'prod':
        // CONFIG BD
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'servife');
        define('DB_USER', 'user_servife');
        define('DB_PASS', 'AW9h([A.G7zb');
        // Email
        $correos = 'admin@gmail.com,servife_sa@hotmail.com';
        define('RECEPTIONISTS', $correos);

        break;

}

