<?php
get_header();
?>

<h1>PAGE.PHP</h1>
<div class="montheme-articles">
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
        <article class="theme-article">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div>
                <?php the_content(); ?>
            </div>
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
