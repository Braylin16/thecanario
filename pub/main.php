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
            <span class="infoArticle"><?=$visitas?> Visitas</span>
        <?php endif ?>
    </p>

    <!-- Miniatura -->
    <figure class="col s12">
        <img loading="lazy" src="img/<?php echo $post['miniatura'] ?>" alt="<?php echo $post['title'] ?>" class="responsive-img materialboxed"><br>
        <figcaption class="col s12"><?php echo $post['img_description'] ?></figcaption>
    </figure>

    <!-- descripcion -->
    <h3 class="col s12 flow-text">
        <?php echo $post['description_post'] ?>
    </h3>

    <!-- contenido -->
    <p id="parrafoContent" class="col s12">
        <?php echo $post['entrada'] ?>
    </p>

    <!-- Tags -->
    <p class="col s12 center"><?php echo $post['tags'] ?></p>

</section>
<?php endforeach ?>