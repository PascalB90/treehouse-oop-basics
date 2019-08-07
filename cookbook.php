<?php
include 'classes/recipes.php';
include "classes/render.php";
include "inc/allrecipes.php";
include "classes/RecipeCollection.php";

$cookbook = new RecipeCollection("Recipes by Treehouse");
$cookbook->setRecipes(

        $lemon_chicken,
        $granola_muffins,
        $belgian_waffles,
        $pepper_casserole,
        $lasagna,
        $dried_mushroom_ragout,
        $rabbit_catalan,
        $grilled_salmon_with_fennel,
        $pistachio_duck,
        $chili_pork,
        $crab_cakes,
        $beef_medallions,
        $silver_dollar_cakes,
        $french_toast,
        $corn_beef_hash,
        $granola,
        $spicy_omelette,
        $scones,
    );


echo Render::listRecipes($cookbook->getRecipeTitles());

