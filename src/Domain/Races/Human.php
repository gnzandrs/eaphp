<?php

namespace EaPHP\Domain\Races;

class Human extends Iluvatar
{
    public function salute()
    {
        return "Hello, my name is {$this->name}";
    }

    public function DamageHuman(Human $human)
    {
        $human->takeDamage(3);
    }

    public function getName()
    {
        return $this->name;
    }
}