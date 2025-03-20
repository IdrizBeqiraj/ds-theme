<<<<<<< HEAD
<?php  
=======
<?php
>>>>>>> ceceab8a736850f1a92b5cbdcfcee858f91a6515
    /* Template Name: Portfolio */
?>
<?php  get_header(); ?>
    <div class="row">
        <div class="col-8">
<<<<<<< HEAD
            <?php 
           $args = [
            "posts_per_page" => 4,
            // "cat" => 3,   
            "category__in" => array(3, 4),
            "orderby" => "title", 
            "order" => "ASC"
        ];
                $query=new WP_Query($args);

                if( $query->have_posts()):
                     while ( $query->have_posts()): $query->the_post();?>
                        <h2><?php  the_title(); ?></h2>
                     <?php
                     endwhile;
                     endif;
             ?>

        </div>
        <div class="col-4">
    </div>
  </div>
<?php get_footer(); ?>
=======
            <?php
                $args=["posts_per_page"=>4,
                        // "cat"=>3
                        "category__in"=>array(3,4)
                        ];
                $query=new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()): $query->the_post();?>
                    <h2><?php the_title();?></h2>
            <?php
                endwhile;
            endif;
            
            ?>
            


        </div>
        <div class="col-4">

        </div>
    </div>
<?php  get_footer(); ?>


>>>>>>> ceceab8a736850f1a92b5cbdcfcee858f91a6515
