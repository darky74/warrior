<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'combattant';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {

    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    public function __construct($id, $speed=30, $life=100, $shield=20){
        $this->id = $id;
        $this->speed = $speed;
        $this->life = $life;
        $this->shield = $shield;

}

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
};



class StartrekWarrior extends Warrior {

    public $mentalPower;
    public $superPower;
    public $level;


    public function power(){
        return $this->mentalPower;
    }

    public function __construct($id, $speed=30, $life=100, $shield=20){
        parent::__construct($id, $speed, $life, $shield);
        $this->mentalPower = 8;
    }
}


class MarvelWarrior extends Warrior {

    public $mentalPower;
    public $superPower;
    public $level;

    public function power(){
        return $this->superPower;
    }


        public function __construct($id, $speed=30, $life=100, $shield=20){
            parent::__construct($id, $speed, $life, $shield);
            $this->superPower = 100;
    }
}


class PokemonWarrior extends Warrior {

    public $mentalPower;
    public $superPower;
    public $level;

    public function power(){
        return $this->level;
    }

    public function __construct($id, $speed=30, $life=100, $shield=20){
        parent::__construct($id, $speed, $life, $shield);
        $this->level = 1;

        }

}

class Weapon{

    public $id;
    public $strength;
    public $imageUrl;


    public function __construct($id, $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

}


