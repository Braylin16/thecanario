<section class="col s12 section">
    <h4 class="flow-text center">M&aacute;s publicaciones</h4>
</section>

<section>
    <?php foreach($morePosts as $morePost) : ?>

        <?php
        // Pasar la variable titulo por la URL
        $titleMorePost = str_replace(' ', '-', $morePost['title']);
        $titleMorePost = strtolower($titleMorePost);      
            
        ?>

        <a href="article/<?=$morePost['id_post']?>/<?=$titleMorePost?>">
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
                            
                            <h3 class='black-text flow-text'>
                                <?=mb_substr($morePost['title'], 0, 40).'...'?>
                            </h3>

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