<?php while (have_posts()) : the_post(); ?>
    <?php the_field('codedrop_embed_code'); ?>
<?php endwhile; ?>
