<?php get_header(); ?>
<div class="about-us">
    <div class="container">
        <?php while(have_posts()):the_post(); ?>
        <?php //the_title(); ?>
        <div class="py-4">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>



<?php get_footer(); ?>