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

    public function getRecipesByTag(String $tag)
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

}