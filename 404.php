<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1>Page not Found</h1>
            <img src="<?php bloginfo('template_url');  ?> /img/404.jpeg " alt="404" style="width:100%">
        </div>
        <div class="col-4">
        <?php 
        get_search_form();
        ?>
    </div>
</div>
    
    
<?php get_footer(); ?>