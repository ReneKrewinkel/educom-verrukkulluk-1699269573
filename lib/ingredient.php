<?php

class ingredient {

    private $connection;
    
    public function __construct($connection){
        $this->connection = $connection;
    }

    public function selecteerIngredient($ingredient_id){

        $sql = "SELECT * FROM ingredient WHERE id = $ingredient_id";

        $result = mysqli_query($this->connection, $sql);
        $ingredient = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return($ingredient);
    }
}