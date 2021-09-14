<section>
    <?php foreach($mainPost as $main) : ?>

        <?php (int)$visita = $main['view'] ?>

        <article class='col s12 m4 l3 xl3'>
            <a href="<?=$url?>/article/<?=$main['id_post']?>/<?=clearUrl($main['title'])?>">
                <div class="col s12 m12 xl12">
                <div class='card hoverable card-article'>

                    <div class='card-image'>
                        <img loading='lazy' src="img/<?=$main['miniatura']?>" class='img-adaptable' title='<?=$main['title']?>' alt="<?=$main['title']?>" height='160' />
                        <b class='card-title green-text'><?=$main['category']?></b>
                    </div>

                    <div class="card-content">

                    <p>
                        <i class="material-icons left grey-text">visibility</i>
                        <span class="grey-text tooltipped" data-position='bottom' data-tooltip='<?=number_format($visita)?> Visualizaciones'>
                            <?=abreView($visita)?>
                        </span>
                    </p>

                    <h3 class='flow-text black-text tooltipped' data-position='bottom' data-tooltip='<?=$main['title']?>'>
                        <?=$main['title']?>        
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