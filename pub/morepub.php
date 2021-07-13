<aside>
    <section id="morepubl" class="col s12 m12 l3 xl3 right">
        <h2 class="flow-text center">M&aacute;s publicaciones</h2>

        <?php 
            while ($row = $stmt->fetch()) :
                // Los datos del usuario
                $id_more_post = $row['id_post'];
                $img = $row['miniatura'];
                $title = $row['title'];
                $view = $row['view'];
                $category = $row['category'];
                $fecha = $row['create_at_post'];

                // Pasar la variable titulo por la URL
                $titleMoreURL = str_replace(' ', '-', $title);
                $titleMoreURL = strtolower($titleMoreURL);

            ?>
            <article>
                <a href="article/<?=$id_more_post?>/<?=$titleMoreURL?>">
                    <div class="col s12 m6 l12 xl12">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img loading="lazy" src="img/<?=$img?>" alt="<?=$title?>">
                            </div>
                            <div class="card-content">
                            <p>
                                <i class="material-icons left grey-text">visibility</i>
                                <span class="grey-text"><?=$view?></span>

                                <i class="material-icons red-text right">favorite_border</i>
                            </p>
                            
                            <h2 class="flow-text black-text"><?=$title?></h2>

                            <span class='black-text'><?=$category?></span>

                            <p>
                                <span class="green-text">
                                <?=form_fecha($fecha)?>
                                </span>
                            </p>

                            </div>
                        </div>
                    </div>
                </a>
            </article>
        <?php endwhile ?>

    </section>
</aside>