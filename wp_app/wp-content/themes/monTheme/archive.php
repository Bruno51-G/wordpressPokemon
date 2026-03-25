<?php
get_header();
?>

<h1>ARCHIVE.PHP</h1>
<div class="montheme-articles">
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
        <article class="theme-article">
            <header>
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <aside>
                    <p>écrit par : <?php the_author_link(); ?> le <?php the_date(); ?>
                        dans <?php the_category(', '); ?>
                    </p>
                    <p>modifié le <?php the_modified_date(); ?> par <?php the_modified_author(); ?></p>
                </aside>
            </header>

            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>

    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;

    posts_nav_link();
?>
</div>

<?php
get_footer();
