<?php get_header(); ?>

<div class="property-card">
    <div class="property-content">
        <h2 class="property-title">🏠 <?php the_title(); ?></h2>
        <p class="property-subtitle">Stylish living in <?php echo get_field('location'); ?></p>

        <div class="property-info-container">
            <div class="property-details">
                <ul>
                    <li><strong>📍 Location:</strong> <?php echo get_field('location'); ?></li>
                    <li><strong>💰 Price:</strong> <span class="price"><?php echo get_field('price'); ?></span></li>
                    <li><strong>🛏️ Bedrooms:</strong> <?php echo get_field('bedrooms'); ?></li>
                    <li><strong>🛁 Bathrooms:</strong> <?php echo get_field('bathrooms'); ?></li>
                    <li><strong>📏 Area:</strong> <?php echo get_field('area'); ?></li>
                </ul>
            </div>

            <div class="property-features">
                <h3 class="features-heading">✨ Features:</h3>
                <ul>
                    <?php 
                    $features = get_field('features'); 
                    if ($features) :
                        foreach ($features as $feature) :
                            echo "<li>$feature</li>";
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>

        <a href="<?php the_permalink(); ?>" class="view-details">🔗 View Details</a>
    </div>
</div>

<?php get_footer(); ?>

