<section class="col s12">
    <h1 class="flow-text center">M&aacute;s publicaciones de Astronom&iacute;a</h1>

    <!-- Articulos -->
    <?php foreach($mypost as $morepost) : ?>
        <article>
            <a href="<?=$url?>/article/<?=$morepost['id_post']?>/<?=clearUrl($morepost['title'])?>">
                <div class="col s12 m6 l4 xl3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img loading='lazy' src="img/<?=$morepost['miniatura']?>" alt="<?=$morepost['title']?>" height='160' clas='img-adaptable' />
                        </div>
                    <div class="card-content">
                        <h3 class="flow-text black-text"><?=mb_substr($morepost['title'], 0, 40).'...'?></h3>
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