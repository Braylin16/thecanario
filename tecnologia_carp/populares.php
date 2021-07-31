 <!-- Los mas populares -->
 <section class="col s12">
    <h1 class="flow-text center">Las publicaciones m&aacute;s populares de <strong>Tecnolog&iacute;a</strong></h1>

    <!-- Primero -->
    <?php foreach($views as $view) : ?>
        <article>
            <a href="<?=$url?>/article/<?=$view['id_post']?>/<?=clearUrl($view['title'])?>">
                <div class="col s12 m6 l4 xl3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img loading='lazy' src="img/<?=$view['miniatura']?>" alt="<?=$view['title']?>" height='160' class='img-adaptable' />
                    </div>
                <div class="card-content">
                    <h2 class="flow-text black-text"><?=mb_substr($view['title'], 0, 40).'...'?></h2>
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