<!-- Las mas leidas -->
<section class="green z-depth-1 col s12">
    <h3 class="white-text flow-text center">Las m&aacute;s leidas</h3>

    <!-- Article -->
    <?php foreach($masleida as $leida) : ?>

        <?php
        // Pasar la variable titulo por la URL
        $titleMoreview = str_replace(' ', '-', $leida['title']);
        $titleMoreview = strtolower($titleMoreview);      
            
        ?>

        <article class="col s12 m4 l3 xl3">
            <a href="article/<?=$leida['id_post']?>/<?=$titleMoreview?>">
                <div class="col s12 m12 xl12">
                    <!-- <h3 class="header">Horizontal Card</h3> -->
                    <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img loading='lazy' class='img-adaptable' src="img/<?=$leida['miniatura']?>" height='190' width='100' alt="<?=$leida['title']?>" />
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class='black-text'><?=mb_substr($leida['title'], 0, 22).'...'?></p>
                            </div>
                            <div class="card-action">
                                <p class="green-text"><?=$leida['category']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    <?php endforeach ?>

</section>