<?php

namespace EaPHP\Domain\Races;

class Orc extends Iluvatar
{
    public function salute()
    {
        return "Burzum-ishi, my name is {$this->name}";
    }

    public function insult()
    {
        return "Pushdug sharkû!";
    }
}