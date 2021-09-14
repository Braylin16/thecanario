<!-- Suscribete a nuestro boletin -->
<section id="boletinArticle" class="col s12 m12 l8 xl8 white z-depth-1">

    <fieldset>
        <legend class="flow-text green-text">Recibe nuestras notificaciones</legend>
        <h4 class="flow-text center">Agregate a nuestra lista de notificaciones</h4>
        <p class="center">
            Suscribete para recibir todas las semanas nuestras mejores publicaciones
        </p>

        <!-- Imprimir los errores -->
        <?php if(count($errors) > 0) : ?>
            <ol>
                <?php foreach ($errors as $error) { ?>
                    <li class="red-text"><?php echo $error; ?></li>
                <?php } ?>
            </ol>
        <?php endif ?>

        <!-- Imprimir el msg de exito -->
        <?php if(isset($success)) : ?>
            <p class="flow-text green white-text center"><?=$success?></p>
        <?php endif ?>

        <div class="row">
            <form class="col s12" method="POST">
                <div class="row">
                    <div class="input-field col s12 m12 l6 xl12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" name="email_su" value="<?php if(isset($_POST["email_su"])){echo $email_su;} ?>" class="validate" required>
                    <label for="email">Correo electr&oacute;nico</label>

                    <!-- Boton -->
                    <button class="btn waves-effect green right" type="submit" name="submit">Suscribirme
                        <i class="material-icons left">notifications</i>
                    </button>

                    </div>
                </div>
            </form>
        </div>
    </fieldset>

</section>