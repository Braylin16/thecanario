<section class="col s12">
    <h1 class="flow-text center">M&aacute;s publicaciones de Astronomia</h1>

    <!-- Articulos -->
    <?php foreach($mypost as $morepost) : ?>

        <?php
        // Pasar la variable titulo por la URL
        $titleURL = str_replace(' ', '-', $morepost['title']);
        $titleURL = strtolower($titleURL);      
            
        ?>

        <article>
            <a href="article/<?=$morepost['id_post']?>/<?=$titleURL?>">
                <div class="col s12 m6 l4 xl3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img loading='lazy' src="img/<?=$morepost['miniatura']?>" alt="<?=$morepost['title']?>">
                        </div>
                    <div class="card-content">
                        <h3 class="flow-text black-text"><?=$morepost['title']?></h3>
                            <p>
                                <span class="green-text"><?=form_fecha($morepost['create_at_post'])?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    <?php endforeach ?>
</section>