<?php
// Function to make a cake
function makeCake($eggs, $sugar, $flour) {
    // Check if the ingredients are sufficient
    if ($eggs < 2 || $sugar < 100 || $flour < 200) {
        echo "Not enough ingredients to make a cake.\n";
        echo "You need at least 2 eggs, 100g of sugar, and 200g of flour.\n";
    } else {
        // Make the cake
        echo "Making a cake with $eggs eggs, $sugar grams of sugar, and $flour grams of flour.\n";
        echo "Mixing ingredients...\n";
        echo "Baking the cake...\n";
        echo "The cake is ready! Enjoy your delicious homemade cake.\n";
    }
}

// Call the function with the ingredients
makeCake(3, 150, 300); // Example with sufficient ingredients
echo "\n";
makeCake(1, 80, 150); // Example with insufficient ingredients
?>
