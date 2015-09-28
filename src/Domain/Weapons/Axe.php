<?php

namespace EaPHP\Weapons;

use EaPHP\Races\Iluvatar;

class Axe
{
    public function damage(Iluvatar $iluvatar)
    {
        $iluvatar->takeDamage(rand(1, 10));
    }

}