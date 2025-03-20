<?php get_header(); ?>

<div class="property-card">
    <div class="property-content">
        <h2 class="property-title">🏠 <?php the_title(); ?></h2>
        <p class="property-subtitle">Stylish living in <?php echo get_post_custom_values('location')[0] ?? ''; ?></p>

        <div class="property-info-container">
            <div class="property-details">
                <ul>
                    <li><strong>📍 Location:</strong> <?php echo get_post_custom_values('location')[0] ?? ''; ?></li>
                    <li><strong>💰 Price:</strong> <span class="price"><?php echo get_post_custom_values('price')[0] ?? ''; ?></span></li>
                    <li><strong>🛏️ Bedrooms:</strong> <?php echo get_post_custom_values('bedrooms')[0] ?? ''; ?></li>
                    <li><strong>🛁 Bathrooms:</strong> <?php echo get_post_custom_values('bathrooms')[0] ?? ''; ?></li>
                    <li><strong>📏 Area:</strong> <?php echo get_post_custom_values('area')[0] ?? ''; ?></li>
                </ul>
            </div>

            <div class="property-features">
                <h3 class="features-heading">✨ Features:</h3>
                <ul>
                    <?php 
                    $features = get_post_custom_values('features');
                    if (!empty($features)) :
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
