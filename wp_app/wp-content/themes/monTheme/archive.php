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
                    <?php the_post_thumbnail('thumbnail'); ?>
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <aside class="dateArticle">
                    <?php echo get_the_date(); ?>
                </aside>
            </header>

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
