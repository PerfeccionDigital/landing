<div class="sf-form">
    <form class="mainForm" action="/gracias" method="post">
        <div class="form-top">
            <div class="content-text block-01">
                <h3>SOLICITA INFORMACIÓN Y LLÉVATE <span>5% DE DESCUENTO</span></h3>
                <p>Incluiremos además el plano de distribución de tu proyecto</p>
            </div>
            <div class="input">
                <input name="name" class="inputtext" type="text" placeholder="Ingresa tu nombre" required>
            </div> 
            <div class="input">
                <input name="email" type="email" placeholder="Ingresa tu correo" required> 
            </div>
            <div class="input">
                <input name="phone" type="number" placeholder="Ingresa tu teléfono" required>
            </div>
            <div class="select">
                <select name="area" class="--area" required >
                    <option value="">¿Qué área deseas remodelar o mejorar?</option>
                    <?php foreach($dataForm as $key => $value): ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="textarea">
                <textarea name="message" placeholder="Si deseas, aquí puedes ingresar alguna pregunta o duda" cols="" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-bottom">
            <div class="sf_btn">
                <button class="mainButton btn-content-solid-rectagle-organge" type="submit">SOLICITAR INFORMACIÓN</button>
            </div>
        </div>
        <p class="center">Aceptamos todas las formas de pago</p>
        <div class="img_cards">
            <img src="/assets/img/visa.png" alt="" title="visa">
            <img src="/assets/img/american.png" alt="" title="american">
            <img src="/assets/img/master.png" alt="" title="master">
            <img src="/assets/img/paypal.png" alt="" title="paypal">
        </div>
    </form>
</div>