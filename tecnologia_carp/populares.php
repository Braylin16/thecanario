 <!-- Los mas populares -->
 <section class="col s12">
    <h1 class="flow-text center">Las publicaciones m&aacute;s populares de <strong>tecnolog&iacute;a</strong></h1>

    <!-- Primero -->
    <?php foreach($views as $view) : ?>

        <?php
        // Pasar la variable titulo por la URL
        $titleViewURL = str_replace(' ', '-', $view['title']);
        $titleViewURL = strtolower($titleViewURL);      
            
        ?>

        <article>
            <a href="article/<?=$view['id_post']?>/<?=$titleViewURL?>">
                <div class="col s12 m6 l4 xl3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img loading='lazy' src="img/<?=$view['miniatura']?>" alt="<?=$view['title']?>" />
                    </div>
                <div class="card-content">
                    <h2 class="flow-text black-text"><?=$view['title']?></h2>
                    <p>
                        <span class="green-text"><?=form_fecha($view['create_at_post'])?></span>
                    </p>
                    </div>
                </div>
                </div>
            </a>
        </article>
    <?php endforeach ?>

</section>