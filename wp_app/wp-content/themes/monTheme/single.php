<?php
get_header();
?>

<h1>SINGLE.PHP</h1>
<div class="montheme-articles">
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
        <article class="theme-article">
            <header>
                <h1><?php the_title(); ?></h1>
                <aside>
                    <p>écrit par <?php the_author_link(); ?> le <?php the_date(); ?>
                    dans <?php the_category(', '); ?>
                </p>
                    <p>modifié le <?php the_modified_date(); ?> par <?php the_modified_author(); ?></p>
                </aside>
            </header>

            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content(); ?>
            </div>

            <aside>
                <?php comments_template(); ?>
            </aside>
        </article>

    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
?>
</div>

<?php
get_footer();
