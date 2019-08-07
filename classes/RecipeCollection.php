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

    /**
     * @param Recipe ...$recipes
     */
    public function setRecipes(Recipe ...$recipes): void
    {
        $this->recipes = $recipes;
    }

}