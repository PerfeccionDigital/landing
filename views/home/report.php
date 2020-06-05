<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte SERVICIOS</title>
        <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php if (count($customers) > 0): ?>
                <table class="table">
                    <tr>
                        <td colspan = "2">
                            <a href="/exportar" style="float: right;" target="_blank">Exportar</a>
                        </td>
                    </tr>
                    <?php foreach($customers as $customer): ?>
                        <tr>
                            <td>
                                <h4><?php echo $customer['nombre']?></h4>
                                <p style="margin: 0;color: #999;font-size: 14px;">
                                <?php echo $customer['correo']?>
                            </p>
                            </td>
                            <td>
                                <div style="color:#999;background-color:#f7f7f7;text-align: center;width: 140px; float: right;">
                                    <?php echo $customer['fecha_registro'] ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                Landing: <?php echo $customer['tipo']?><br>
                                Celular: <?php echo $customer['celular']?> <br>
                                Mensaje: <?php echo $customer['mensaje']?><br>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td colspan = "2">
                            <a href="/exportar" style="float: right;" target="_blank">Exportar</a>
                        </td>
                    </tr>
                </table>
                <?php endif ?>
            </div>
        </div>
    </body>
</html>