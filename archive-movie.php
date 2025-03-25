<?php get_header(); ?>

<div class="container">
    <h1>All Movies</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="movie-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="movie-thumbnail">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
            </div>
            <div class="movie-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php endwhile; else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</div>
<?php /* Template Name: Movie Archive */ ?>
<p style="color: red;">This is the archive-movie.php file.</p>


<?php get_footer(); ?>
