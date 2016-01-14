<?php
$width = get_post_meta($post->ID,'width',true);
$border_color = get_post_meta($post->ID,'border_color',true);
$font_color = get_post_meta($post->ID,'font_color',true);
$margin = get_post_meta($post->ID,'margin_border',true);
?>

<div style="width: <?php echo $width . 'px'; ?>" class="ui image">
    <article <?php post_class(); ?> style="border: 10px solid <?php echo $border_color; ?>; margin: <?php echo $margin; ?>;">
        <?php the_content(); ?>
    </article>
</div>
