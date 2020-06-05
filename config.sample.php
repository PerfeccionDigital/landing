<?php

// CONFIG BD
define('DB_HOST', 'localhost');
define('DB_NAME', 'landing_manifiesto');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// CONFIG MAIL
define('MAIL_HOST','smtp.mandrillapp.com');         // servidor smtp
define('MAIL_USERNAME','favio@janaq.com');          // usuario smtp
define('MAIL_PASS','ys2eQcF0NGh6QjS-UlLf-g');       // password smtp

// CONFIG MAIL de la persona quien lo envia
define('MAIL_FROM_EMAIL', 'admin@manifiesto.com');  // correo origen
define('MAIL_FROM_NAME', 'Admin Manifiesto');       // nombre origen

// Titulo del mensaje
define('MAIL_SUBJECT','Nuevo Participante');        // asunto

// correos que recepcionarán el registro de cada participante
// separados por comas 'email_1@mail.com,email_2@mail.com'
$correos = 'favio@janaq.com';         // correos destino, se puede colocar varios separados por comas sin espacios
define('RECEPTIONISTS', $correos);

// credenciales para el reporte de excel en la ruta /exportar_inscritos
define('USER_DOWNLOAD', 'landing');
define('PASS_DOWNLOAD', 'l4nd1ng2016!!');