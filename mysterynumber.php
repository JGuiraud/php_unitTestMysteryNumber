<?php

class MysteryNumber
{
    // public $numberPicked;
    public $vies = 3;
    private $number;

    public function __construct()
    {
        $this->setNumber(rand(0, 9));
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function submit($numberPicked)
    {
        if (MysteryNumber::getNumber() == $numberPicked) {
            return true;
        } else {
            $vies-=1;
            if ($vies===0) {
                echo 'tu pues !';
            }
        }
    }

// créer un bouton submit qui evoie l'input value dans $numberPicked'
}
