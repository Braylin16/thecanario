<?php foreach($result as $post) : ?>
<section id="sectionArticle" class="col s12 m12 l8 xl8 white z-depth-1">

<!-- info -->
<h1 class="flow-text center"><?php echo $post['title'] ?></h1>
    <p class="col s12 center">

        <!-- Categoria -->
        <strong class="green-text infoArticle"><?php echo $post['category'] ?></strong>

        <!-- Fecha y hora del post -->
        <time class="grey-text infoArticle" datetime="26 de Junio 2021">
            <?php echo fechaHora($post['create_at_post']) ?>
        </time>

        <!-- Autor -->
        <b class="infoArticle"><?php echo $post['name'].' '.$post['surname'] ?></b>

        <!-- Cantidad de visitas -->
        <?php if(isset($visitas)) : ?>
            <span class="infoArticle"><?=number_format($visitas)?> Visitas</span>
        <?php endif ?>
    </p>

    <!-- Miniatura -->
    <figure class="col s12">
        <img loading="lazy" src="img/<?php echo $post['miniatura'] ?>" title='<?php echo $post['title'] ?>' alt="<?php echo $post['title'] ?>" class="responsive-img materialboxed"><br>
        <figcaption class="col s12"><?php echo $post['img_description'] ?></figcaption>
    </figure>

    <!-- descripcion -->
    <h2 class="col s12 flow-text">
        <?php echo $post['description_post'] ?>
    </h2>

    <!-- contenido -->
    <p id="parrafoContent" class="col s12">
        <?php echo nl2br($post['entrada']) ?>
    </p>

    <!-- Tags -->
    <p class="col s12 center"><?php echo $post['tags'] ?></p>

    <!-- share -->
    <p class="col s12 center">

        <!-- Facebook -->
        <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>&layout=button_count&size=large&appId=377925009351028&width=114&height=28" width="140" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        &nbsp;

        <!-- Twitter -->
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="<?=$post['description_post']?>" data-url="<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>" data-via="thecanarioblog" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        &nbsp;&nbsp;&nbsp;

        <!-- Telegram -->
        <script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-share-url="<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>" data-size="large"></script>

        &nbsp;&nbsp;&nbsp;

        <!-- Messenger -->
        <a href="https://www.facebook.com/dialog/send?link=<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>&app_id=272487402772119&redirect_uri=<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>" target="_blank"><img src='./images/messenger.png' title='Compartir con un amigo en Telegram' alt='Icono de compartir en Messenger' /></a>

        &nbsp;&nbsp;&nbsp;

        <!-- WhatsApp -->
        <a href="https://api.whatsapp.com/send?text=<?php echo $post['title'] ?>%20-%20The%20Canario%20<?=$url?>/article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>" target="_blank"><img src='./images/whatsapp.png' title='Compartir con un amigo en WhatsApp' alt='Icono de compartir en WhatsApp' /></a>

    </p>

</section>
<?php endforeach ?>