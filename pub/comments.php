<!-- Comentarios -->
<section id="commentArticle" class="col s12 m12 l8 xl8 white z-depth-1">

<?php if($countComment > 0) : ?>
    <h4 class="flow-text">(<?=$countComment?>) Comentarios</h4>
    <div class="divider"></div>
<?php endif ?>

<!-- Imprimir los errores -->
<?php if(count($errorsC) > 0) : ?>
    <ol>
        <?php foreach ($errorsC as $errorC) { ?>
            <li class="red-text"><?php echo $errorC; ?></li>
        <?php } ?>
    </ol>
<?php endif ?>

<p class="flow-text red white-text center"><?php if(isset($sesion)){echo $sesion;} ?></p>
<p class="flow-text green white-text center"><?php if(isset($successC)){echo $successC;} ?></p>

<div class="row">
    <form class="col s12" method='POST'>
        <div class="row">
            <div class="input-field col s12 m12 l12 xl12">
            <i class="material-icons prefix">comment</i>
            <textarea id="comentario" class="materialize-textarea" name='comment' required></textarea>
            <label for="comentario">Realizar un comentario...</label>

            <!-- Boton -->
            <button class="btn waves-effect green right" type="submit" name="submitComment">Comentar
                <i class="material-icons left">near_me</i>
            </button>

            <div class="col s12">
                <a href="<?=$url?>/terminos-y-condiciones#uso">Pol&iacute;ticas de comentarios</a>
            </div>

            </div>
        </div>
    </form>
</div>

<!-- Comentario -->
<?php foreach($comentC as $postC) : ?>
    <div class="col s2 m1 l1 xl1">

        <!-- Foto de perfil -->
        <?php if($postC['photo_profile'] == true) : ?>
            <img loading="lazy" src="img-profile/<?php echo $postC['photo_profile'] ?>" alt="<?php echo $postC['name'].' '.$postC['surname'] ?>" class="circle img-adaptable" height='60' width='60'>
        <?php else : ?>
            <img loading="lazy" src="images/usuario.png" alt="<?php echo $postC['name'].' '.$postC['surname'] ?>" class="circle img-adaptable" height='60' width='60'>
        <?php endif ?>
        
    </div>
    <div class="col s10 m11 l11 xl11">
        <!-- Nombre -->
        <b class="green-text"><?php echo $postC['name'].' '.$postC['surname'] ?></b> <span>&#8226;</span>

        <!-- Fecha y hora -->
        <time class="grey-text" datetime="<?php echo form_fecha($postC['create_at_comment']) ?>">
            <?php echo fechaHora($postC['create_at_comment']) ?>
        </time>

        <!-- Comentario -->
        <p><?php echo $postC['comment'] ?></p><br>
    </div>
<?php endforeach ?>

</section>