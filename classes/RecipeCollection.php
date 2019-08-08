<?php


class RecipeCollection
{

    private $title ;
    private $recipes = [];

    /**
     * RecipeCollection constructor.
     * @param $title
     */

    public function __construct($title)
    {
        $this->title = $title;

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    /*
     * @param Recipe ...$recipes
     */

    public function setRecipes(Recipe ...$recipes): void
    {
        if (is_array($recipes)){
            foreach ($recipes as $recipe) {
                $this->recipes[] = $recipe;
            }
        }  else {

            $this->recipes[] = $recipes;
        }


    }

    /**
     * @return array
     */

    public function getRecipeTitles(): array
    {

        $titles = [];

        foreach ($this->recipes as $recipe) {
            $titles[] = $recipe->getTitle();
        }

        return $titles;

    }

    /**
     * @param String $tag
     * @return array
     */

    public function getRecipesByTag(String $tag) :array
    {
        $taggedRecipes = [];

        /**
         * @var Recipe $recipe
         */

        foreach ($this->recipes as $recipe) {
            if(in_array(strtolower($tag),$recipe->getTags())){
                $taggedRecipes[] = $recipe;
            }
        }

        return $taggedRecipes;

    }


    /**
     * @return array
     */

    public function combinedIngredients() :array
    {

        $combinedIngredients = [];

        /**
         * @var Recipe $recipe
         */

        foreach ($this->recipes as $recipe) {
            foreach ($recipe->getIngredients() as $ingredient) {

                $item = $ingredient['item'];

                if(strpos($item, ",")) {
                    $item = strstr($item, ",", true);
                }

                if(substr($item, -1) == "s" && array_key_exists(rtrim($item,"s"),$combinedIngredients)){
                    $item = rtrim($item, "s");
                } elseif (array_key_exists($item . "s", $combinedIngredients)) {

                        $item .= "s";
                }


                $combinedIngredients[$item] = array(
                    $ingredient['amount'],
                    $ingredient['measure']
                );

        }

        }

        return $combinedIngredients;

    }

}