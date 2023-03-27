<?php

namespace App;

class Bakery
{
    /**
     * Calculate the output of cakes for a giver recipe
     *
     * @param array $recipe      Contains the necessary ingredients to make one cake
     * @param array $ingredients Contains the amount of ingredients you have available to bake
     *
     * @return int The number of cakes you can bake
     */
    public static function calculateOutput(array $recipe, array $ingredients): int
    {
        $availableIterator = array_keys($ingredients);
        $recipeIterator = array_keys($recipe);
        
        foreach ($recipeIterator as $key) {
          if(!array_key_exists($key, $ingredients)) return 0;
        }
        
        $result = [];
        
        foreach ($availableIterator as $key) {
          if(array_key_exists($key, $recipe) && $recipe[$key] > 0) {
            array_push($result, floor($ingredients[$key] / $recipe[$key]));
          }
        }
        
        return min($result);
    }
}