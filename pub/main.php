<?php foreach($result as $post) : ?>
<section id="sectionArticle" class="col s12 m12 l8 xl8 white z-depth-1">

<!-- info -->
<h1 class="flow-text center"><?php echo $post['title'] ?></h1>
    <p class="col s8 m7 right">
        <i class="material-icons red-text left">favorite_border</i><b>4 Me gusta</b>
    </p>
    <p class="col s12 center">
        <strong class="green-text infoArticle"><?php echo $post['category'] ?></strong>
        <time class="grey-text infoArticle" datetime="26 de Junio 2021"><?php echo form_fecha($post['create_at_post']) ?></time> 
        <b class="infoArticle"><?php echo $post['name'].' '.$post['surname'] ?></b>
        <span class="infoArticle">405 Visitas</span>
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