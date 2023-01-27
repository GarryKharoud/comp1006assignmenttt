<?php
$storeIngredients = [
    "2 tablespoons olive oil",
    "1 clove garlic, minced",
    "1 cup dry bread crumbs",
    "⅔ cup grated Parmesan cheese",
    "1 teaspoon dried basil leaves",
    "¼ teaspoon ground black pepper",
    "6 skinless, boneless chicken breast halves"
];
$stepsOfRecipe = [
    "Preheat oven to 350 degrees F (175 degrees C). Lightly grease a 9x13 inch baking dish.",
    "In a bowl, blend the olive oil and garlic.",
    "In a separate bowl, mix the bread crumbs, Parmesan cheese, basil, and pepper.",
    "Dip each chicken breast in the oil mixture, then in the bread crumb mixture.",
    "Arrange the coated chicken breasts in the prepared baking dish, and top with any remaining bread crumb mixture.",
    "Bake 30 minutes in the preheated oven, or until chicken is no longer pink and juices run clear."
];
$title = "Baked Garlic Parmesan Chicken";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">'
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title><?= $title ?></title>
</head>

<body class="p-3 mb-2 bg-dark text-white opacity-75">
    <header>
        <h1 class="text-center"><?= $title ?></h1>
    </header>
    <div>
        <video autoplay loop muted plays-inline class="video">
            <source src="./Christmas - 12919.mp4" type="video/mp4">
        </video>
    </div>
    <div id="container">
        <div>
            <img src="./618489-91c1274c3ace498f8f84da3ed17838cd.webp" alt="">
        </div>
        <div class="div1">
            <div>
                <h2 class="text-uppercase">Ingredients</h2>
                <ul>
                    <?php
                    foreach ($storeIngredients as $element) :
                        echo "<li> $element</li>";
                    ?>
                    <?php endforeach ?>
                </ul>
            </div>

            <div>
                <h2 class="text-uppercase">Steps</h2>
                <ol>
                    <?php
                    foreach ($stepsOfRecipe as $step) :
                        echo "<li> $step</li>";
                    ?>
                    <?php endforeach ?>
                </ol>
            </div>
        </div>
        <div>
            <img src="./618489-91c1274c3ace498f8f84da3ed17838cd.webp" alt="">
        </div>
    </div>
</body>

</html>