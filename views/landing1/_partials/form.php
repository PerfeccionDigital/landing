<div class="sf-form">
    <form class="mainForm" action="/remodelacion/gracias" method="post">
        <div class="form-top">
            <div class="conent-text">
                <h4>SOLICITA INFORMACIÓN Y OBTÉN UN <strong>5% DE DESCUENTO</strong></h4>
                <div class="content_cards">
                    <div class="txt_cards">Aceptamos todas las tarjetas :</div>
                    <div class="img_cards">
                        <img src="/assets/img/visa.png" alt="" title="visa">
                        <img src="/assets/img/american.png" alt="" title="american">
                        <img src="/assets/img/master.png" alt="" title="master">
                        <img src="/assets/img/paypal.png" alt="" title="paypal">
                    </div>
                </div>
                <p>( Incluye plano de distribución del proyecto )</p>
            </div>
            <div class="input">
                <input name="name" class="inputtext" type="text" placeholder="Nombre" required>
            </div> 
            <div class="input">
                <input name="email" type="email" placeholder="Correo" required> 
            </div>
            <div class="input">
                <input name="phone" type="number" placeholder="Teléfono" required>
            </div>
            <div class="select">
                <select name="area" class="--area" required >
                    <option value="">- Seleccione Área -</option>
                    <?php foreach($dataForm as $key => $value): ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="textarea">
                <textarea name="message" placeholder="Hola estoy interesado (a), solicito más información." cols="" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-bottom">
            <div class="sf_btn">
                <button class="mainButton btn-content-solid-2 -gtm-form-btn" type="submit">SOLICITAR INFORMACIÓN</button>
            </div>
        </div>
    </form>
</div>