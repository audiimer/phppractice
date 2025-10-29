<!DOCTYPE html> <!-- declare HTML5 document type -->
<html lang="en"> <!-- root element; language set to English -->
<head> <!-- document head start -->
    <meta charset="UTF-8"> <!-- file encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsive viewport for mobile -->
    <title>Products</title> <!-- browser tab title -->
</head>
<body> <!-- document body start -->
    <h1>Products </h1> <!-- page heading -->
    <?php // start loop: iterate through each product in $products array
    foreach ($products as $product): ?>
        <div> <!-- container for a single product -->
            <h2><?= htmlspecialchars($product["name"]) ?></h2> <!-- product name, escaped to prevent XSS -->
           <p><?= htmlspecialchars($product["description"]) ?></p> <!-- product description, escaped to prevent XSS -->
        </div> <!-- end product container -->
        <?php // end of foreach loop
    endforeach; ?>
</body>
</html>