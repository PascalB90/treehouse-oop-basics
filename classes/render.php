<?php

class Render
{
    public function __toString()
    {
        $output = "The following methods are available for " . __CLASS__ ." objects: \n";
        $output .= implode("\n", get_class_methods(__CLASS__));
        return $output;
    }

    /**
     * @param array $recipes
     * @return string
     */

    public static function listRecipes(Array $recipes): string {

        asort($recipes);
        return implode("\n",$recipes);

    }

    public static function listShopping($ingredients)
    {

        ksort($ingredients);
        return implode("\n",array_keys($ingredients));

    }
    
    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        return $output;
    }
    
    public static function displayRecipe($recipe)
    {
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\n";
        $output .= implode(", ",$recipe->getTags());
        $output .= "\n\n";
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "\n";
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n";
        $output .= $recipe->getYield();
        return $output;
    }
    
}