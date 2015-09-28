<?php

namespace EaPHP\Weapons;

use EaPHP\Races\Iluvatar;

interface Weapon
{
    public function damage(Iluvatar $iluvatar);
}