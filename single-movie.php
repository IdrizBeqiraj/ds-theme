<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="movie-detail">
            <h1><?php the_title(); ?></h1>
            <div class="movie-thumbnail">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                } ?>
            </div>
            <div class="movie-content">
                <?php the_content(); ?>
            </div>
            <div class="movie-comments">
                <?php comments_template(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
