<?php
    $imgSize  = truefalse(90, 10);
    $imgColor = whichColor();
?>

<article <?php //post_class(); ?> class="item <?php echo $imgSize . ' ' . $imgColor; ?>">
    <a href="<?php the_permalink(); ?>">
        <div class="image-wrapper">
            <?php the_post_thumbnail(); ?>
        </div>
    </a>
</article>
