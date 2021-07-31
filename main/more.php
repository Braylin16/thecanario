<section class="col s12 section">
    <h5 class="flow-text center">M&aacute;s publicaciones</h5>
</section>

<section>
    <?php foreach($morePosts as $morePost) : ?>
        <a href="<?=$url?>/article/<?=$morePost['id_post']?>/<?=clearUrl($morePost['title'])?>">
            <article class='col s12 m4 l3 xl3'>
                <div class='col s12 m12 xl12'>
                    <div class='card hoverable'>

                        <div class='card-image'>
                            <img loading='lazy' src="img/<?=$morePost['miniatura']?>" alt="<?=$morePost['title']?>" height='160' />
                            <b class="orange-text card-title"><?=$morePost['category']?></b>
                        </div>

                        <div class="card-content">
                            <p>
                                <i class="material-icons left grey-text">visibility</i>
                                <span class="grey-text"><?=$morePost['view']?></span>
                            </p>
                            
                            <h4 class='black-text flow-text tooltipped' data-position='bottom' data-tooltip='<?=$morePost['title']?>'>
                                <?=mb_substr($morePost['title'], 0, 40).'...'?>
                            </h4>

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