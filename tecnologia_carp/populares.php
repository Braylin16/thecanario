 <!-- Los mas populares -->
 <section class="col s12">
    <h1 class="flow-text center">Tecnolog&iacute;a</h1>

    <!-- Primero -->
    <?php foreach($views as $view) : ?>
        <article>
            <a href="<?=$url?>/article/<?=$view['id_post']?>/<?=clearUrl($view['title'])?>">
                <div class="col s12 m6 l4 xl3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img loading='lazy' src="img/<?=$view['miniatura']?>" title='<?=$view['title']?>' alt="<?=$view['title']?>" height='160' class='img-adaptable' />
                    </div>
                <div class="card-content">
                    <h3 class="flow-text black-text"><?=$view['title']?></h3>
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