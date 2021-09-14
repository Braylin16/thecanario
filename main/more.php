<section class="col s12 section">
    <h6 class="flow-text center">M&aacute;s publicaciones</h6>
</section>

<section>
    <?php foreach($morePosts as $morePost) : ?>

        <?php (int)$visita = $morePost['view'] ?>

        <a href="<?=$url?>/article/<?=$morePost['id_post']?>/<?=clearUrl($morePost['title'])?>">
            <article class='col s12 m4 l3 xl3'>
                <div class='col s12 m12 xl12'>
                    <div class='card hoverable card-article'>

                        <div class='card-image'>
                            <img loading='lazy' src="img/<?=$morePost['miniatura']?>" title='<?=$morePost['title']?>' alt="<?=$morePost['title']?>" height='160' />
                            <b class="green-text card-title"><?=$morePost['category']?></b>
                        </div>

                        <div class="card-content">
                            <p>
                                <i class="material-icons left grey-text">visibility</i>
                                <span class="grey-text tooltipped" data-position='bottom' data-tooltip='<?=number_format($visita)?> Visualizaciones'>
                                    <?=abreView($visita)?>
                                </span>
                            </p>
                            
                            <h5 class='black-text flow-text tooltipped' data-position='bottom' data-tooltip='<?=$morePost['title']?>'>
                                <?=$morePost['title']?>
                            </h5>

                            <p>
                                <span class="green-text"><?=form_fecha($morePost['create_at_post'])?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </a>
    <?php endforeach ?>
</section>