<?php get_header(); ?>

<main class="home-container">
    <section class="hero-section">
        <h1>Welcome to Hadia Shahid Real Estate</h1>
        <p>Building Wealth Through Real Estate</p>
        <a href="<?php echo get_template_directory_uri(); ?>/archive-property.php" class="btn btn-primary">View Properties</a>

    </section>

    <section class="testimonial-section">
    <h2>What Our Clients Say</h2>
    <?php
    $testimonial_query = new WP_Query(array(
        'post_type'      => 'testimonial', // Only fetch testimonials
        'posts_per_page' => 3,  // Adjust as needed
    ));

    if ($testimonial_query->have_posts()) {
        echo '<div class="testimonials-container">';
        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
            ?>
            <div class="testimonial">
                <h3 class="testimonial-title"><?php the_title(); ?></h3>
                <p class="testimonial-text"><?php the_content(); ?></p>
            </div>
            <?php
        endwhile;
        echo '</div>';
    } else {
        echo '<p>No testimonials found. Please add some.</p>';
    }
    wp_reset_postdata();
    ?>
</section>


    <section class="featured-posts">
        <h2>Latest Blog Posts</h2>
        <div class="posts-grid">
            <?php
            $query = new WP_Query(array('posts_per_page' => 3));
            while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="post-card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>

   
</main>

<?php get_footer(); ?>