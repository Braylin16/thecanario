<section>
    <?php foreach($mainPost as $main) : ?>
        <article class='col s12 m4 l3 xl3'>
            <a href="<?=$url?>/article/<?=$main['id_post']?>/<?=clearUrl($main['title'])?>">
                <div class="col s12 m12 xl12">
                <div class='card hoverable'>

                    <div class='card-image'>
                        <img loading='lazy' src="img/<?=$main['miniatura']?>" class='img-adaptable' alt="<?=$main['title']?>" height='160' />
                        <b class='card-title orange-text'><?=$main['category']?></b>
                    </div>

                    <div class="card-content">

                    <p>
                        <i class="material-icons left grey-text">visibility</i>
                        <span class="grey-text"><?=$main['view']?></span>
                    </p>

                    <h3 class='flow-text black-text tooltipped' data-position='bottom' data-tooltip='<?=$main['title']?>'>
                        <?=mb_substr($main['title'], 0, 40).'...'?>        
                    </h3>

                    <p>
                        <span class="green-text"><?=form_fecha($main['create_at_post'])?></span>
                    </p>

                    </div>
                </div>
                </div>
            </a>
        </article>
    <?php endforeach ?>

</section>