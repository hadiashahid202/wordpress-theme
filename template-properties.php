<?php
/* Template Name: Properties */
get_header();
?>

<div class="container mx-auto px-6 py-12">
    <h2 class="text-center text-3xl font-bold text-gray-900 mb-8">Featured Properties</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <?php
        $args = array(
            'post_type'      => 'property',
            'posts_per_page' => 6
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800"><?php the_title(); ?></h3>
                    <p class="text-gray-600 mt-2"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="block mt-4 text-center text-white bg-red-500 py-2 rounded-lg">Read More</a>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>
