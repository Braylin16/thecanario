<aside>
    <section id="morepubl" class="col s12 m12 l3 xl3 right">
        <h2 class="flow-text center">M&aacute;s publicaciones</h2>

        <?php 
            while ($row = $stmt->fetch()) :
                // Los datos del usuario
                $id_more_post = $row['id_post'];
                $img = $row['miniatura'];
                $title = $row['title'];
                (int)$view = $row['view'];
                $category = $row['category'];
                $fecha = $row['create_at_post'];

            ?>
            <article>
                <a href="<?=$url?>/article/<?=$id_more_post?>/<?=clearUrl($title)?>">
                    <div class="col s12 m6 l12 xl12">
                        <div class="card hoverable">
                            
                            <div class="card-image">
                                <img loading="lazy" src="img/<?=$img?>" title='<?=$title?>' alt="<?=$title?>" class='img-adaptable' height='160' />
                            </div>
                            <div class="card-content">
                            <p>
                                <i class="material-icons left grey-text">visibility</i>
                                <span class="grey-text tooltipped" data-position='bottom' data-tooltip='<?=number_format($view)?> Visualizaciones'>
                                    <?=abreView($view)?>
                                </span>
                            </p>
                            
                            <h3 class="flow-text black-text"><?=$title?></h3>

                            </div>
                        </div>
                    </div>
                </a>
            </article>
        <?php endwhile ?>

    </section>
</aside>