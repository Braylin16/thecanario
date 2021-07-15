 <!-- Los mas populares -->
 <section class="col s12">
    <h1 class="flow-text center">Los post m&aacute;s populares de <strong>Astronomia</strong></h1>

    <!-- Articulos -->
    <?php foreach($views as $view) : ?>
        <article>
            <a href="<?=$url?>/article/<?=$view['id_post']?>/<?=clearUrl($view['title'])?>">
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