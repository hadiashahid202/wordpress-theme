<?php get_header(); ?>

<main>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>By <?php the_author(); ?> | <?php the_date(); ?></p>
                <?php the_post_thumbnail(); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>
<div class="pagination">
    <?php previous_posts_link('« Newer Posts'); ?>
    <?php next_posts_link('Older Posts »'); ?>
</div>


<?php get_footer(); ?>