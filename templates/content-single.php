<div class="ui container">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <div class="entry-content">
                <div class="ui image">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>
