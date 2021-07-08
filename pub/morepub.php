<aside>
    <section id="morepubl" class="col s12 m12 l3 xl3 right">
        <h2 class="flow-text center">M&aacute;s publicaciones</h2>

        <?php // sacar todas las pub 
            $stmt = $conexion->query("SELECT post.id_post, post.title, post.category, post.miniatura, post.create_at_post FROM post WHERE post.id_post != $id_post LIMIT 4");
            $stmt->execute();
            while ($row = $stmt->fetch()) {

                // Los datos del usuario
                $id_more_post = $row['id_post'];
                $img = $row['miniatura'];
                $title = $row['title'];
                $category = $row['category'];
                $fecha = $row['create_at_post'];

            ?>
            <article>
                <div class="col s12 m6 l12 xl12">
                    <div class="card">
                        <div class="card-image">
                            <img loading="lazy" src="img/<?=$img?>" alt="<?=$title?>">
                        </div>
                        <div class="card-content">
                        <p>
                            <i class="material-icons left grey-text">visibility</i>
                            <span class="grey-text">81</span>

                            <i class="material-icons red-text right">favorite_border</i>
                        </p>
                        
                        <h2 class="flow-text"><?=$title?></h2>

                        <span><?=$category?></span>

                        <p>
                            <span class="green-text">
                            <?=form_fecha($fecha)?>
                            </span>
                        </p>

                        </div>
                    </div>
                </div>
            </article>
        <?php } ?>

    </section>
</aside>