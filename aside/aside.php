<aside class="col s3 z-depth-1 hide-on-med-and-down">

    <h1 class="flow-text center">
        <i class="material-icons large">notifications_active</i><br>
        Mantente al d&iacute;a
    </h1>

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

    <!-- Form -->
    <div class="row">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                <i class="material-icons prefix">mail</i>
                <input id="email" type="email" class="validate" name="email_su" required>
                <label for="email">Correo electron&iacute;co</label>
                </div>
            </div>

            <!-- Button -->
            <button class="btn-small waves-effect green right" type="submit" name="submit">Enviar
                <i class="material-icons left">near_me</i>
            </button>

        </form>
    </div>

    <p>No te pierdas de nuestras actualizaciones y mantente al d&iacute;a solo colocando tu correo electr&oacute;nico</p>

</aside>