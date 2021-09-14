<!-- Las mas leidas -->
<section class="green z-depth-1 col s12">
    <h2 class="white-text flow-text center">Las m&aacute;s le&iacute;das</h2>

    <!-- Article -->
    <?php foreach($masleida as $leida) : ?>


        <article class='col s12 m4 l3 xl3'>
            <a href="<?=$url?>/article/<?=$leida['id_post']?>/<?=clearUrl($leida['title'])?>">
                <div class="col s12 m12 xl12">
                <div class='card hoverable card-article'>

                    <div class='card-image'>
                        <img loading='lazy' class='img-adaptable' src="img/<?=$leida['miniatura']?>" height='200' width='100' title='<?=$leida['title']?>' alt="<?=$leida['title']?>" />
                        <b class='card-title green-text'><?=$leida['category']?></b>
                    </div>

                    <div class="card-content">

                    <h4 class='flow-text black-text tooltipped' data-position='bottom' data-tooltip='<?=$leida['title']?>'>
                        <?=$leida['title']?>        
                    </h4>

                    <p>
                        <span class="green-text"><?=form_fecha($leida['create_at_post'])?></span>
                    </p>

                    </div>
                </div>
                </div>
            </a>
        </article>
    <?php endforeach ?>

</section>