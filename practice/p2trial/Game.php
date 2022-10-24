<?php

class Game {
    
    # Properties
    public $draws = [];

    # Methods
    public function getAll()
    {
        return $this->draws;
    }

    public function getById(int $id)
    {
        return 'This method should return details about a specific product';
    }

}