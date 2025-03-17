<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern 2-Bedroom Apartment</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* General Page Styling */
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f4f4f4;
            padding: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Property Card Container */
        .property-card {
            display: flex;
            max-width: 850px;
            width: 100%;
            background: linear-gradient(135deg, #ffffff 0%, #f8f8f8 100%);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
            border: 3px solid #c2a26a;
            transition: all 0.4s ease-in-out;
        }

        .property-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
        }

        /* Left Side - Image */
        .property-image {
            width: 45%;
            height: auto;
            object-fit: cover;
        }

        /* Right Side - Property Details */
        .property-content {
            width: 55%;
            padding: 25px;
        }

        .property-title {
            font-size: 28px;
            font-weight: bold;
            color: #444;
            margin-bottom:30px;
            text-align:center;
        }

        .property-subtitle {
            font-size: 16px;
            color: #777;
            margin-bottom: 15px;
        }

        .property-info-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            text-align: left;
            margin-bottom: 40px;
        }

        /* Left Column - Property Details */
        .property-details {
            flex: 1;
            font-size: 16px;
            color: #444;
        }

        .property-details ul {
            list-style: none;
            padding: 0;
        }

        .property-details li {
            padding: 6px 0;
            font-size: 17px;
        }

        /* Right Column - Features */
        .property-features {
            flex: 1;
            font-size: 16px;
            color: #555;
        }

        .features-heading {
            font-size: 18px;
            font-weight: bold;
            color: #8d703b;
            margin-bottom: 5px;
        }

        .property-features ul {
            list-style: none;
            padding: 0;
        }

        .property-features li {
            padding: 5px 0;
            border-left: 3px solid #c2a26a;
            padding-left: 10px;
        }

        /* Button */
        .view-details {
            display: block;
            width: fit-content;
            margin: 20px auto; /* Centering */
            background-color: #a07d3b; /* Button color */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .view-details:hover {
            background: #a37c48;
            transform: translateY(-3px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .property-card {
                flex-direction: column;
            }

            .property-image {
                width: 100%;
                height: 250px;
            }

            .property-content {
                width: 100%;
                padding: 20px;
            }
        }

    </style>
</head>
<body>

    <?php
    $property = [
        "title" => "🏠 Modern Bedroom Apartment",
        "location" => "New York City, NY",
        "price" => "$850,000",
        "bedrooms" => 2,
        "bathrooms" => 2,
        "area" => "1,500 sq. ft.",
        "features" => ["💪 Gym & Fitness Center", "🌇 Rooftop Lounge", "🛡️ 24/7 Security"],
        "image" => "assets/bedroom.jpeg", // Replace with actual image path
        "details_link" => "/property/modern-apartment-nyc"
    ];
    ?>

    <div class="property-card">
        <!-- Left: Property Image -->
        <img src="<?php echo $property['image']; ?>" alt="Property Image" class="property-image">

        <!-- Right: Property Details -->
        <div class="property-content">
            <h2 class="property-title"><?php echo $property["title"]; ?></h2>
            <p class="property-subtitle">Stylish living in <?php echo $property["location"]; ?></p>

            <div class="property-info-container">
                <div class="property-details">
                    <ul>
                        <li><strong>📍 Location:</strong> <?php echo $property["location"]; ?></li>
                        <li><strong>💰 Price:</strong> <span class="price"><?php echo $property["price"]; ?></span></li>
                        <li><strong>🛏️ Bedrooms:</strong> <?php echo $property["bedrooms"]; ?></li>
                        <li><strong>🛁 Bathrooms:</strong> <?php echo $property["bathrooms"]; ?></li>
                        <li><strong>📏 Area:</strong> <?php echo $property["area"]; ?></li>
                    </ul>
                </div>

                <div class="property-features">
                    <h3 class="features-heading">✨ Features:</h3>
                    <ul>
                        <?php foreach ($property["features"] as $feature) : ?>
                            <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <a href="<?php echo $property["details_link"]; ?>" class="view-details">🔗 View Details</a>

                   </div>
    </div>

</body>
</html>