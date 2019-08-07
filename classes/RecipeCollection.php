<?php


class RecipeCollection
{

    private $title ;
    private $recipes = [];

    /**
     * RecipeCollection constructor.
     * @param $title
     * @param array $recipes
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
     * @param object $recipes
     */
    public function setRecipes(object ...$recipes): void
    {
        $this->recipes = $recipes;
    }

}