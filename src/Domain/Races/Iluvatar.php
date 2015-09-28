<?php
/**
 * By: @gnzandrs
 * Date: 19-09-15
 * Desc: All the characters of the game are created since this.
 */

namespace EaPHP\Domain\Races;

use EaPHP\Weapons\Weapon;

abstract class Iluvatar
{
    protected $name;

    protected $hitPoints;

    /**
     * @type Weapon
     */
    protected $weapon;

    /**
     * Iluvatar constructor.
     * @param $name
     * @param $hitPoints
     */
    public function __construct($name, $hitPoints)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
    }

    public function damage(Iluvatar $iluvatar)
    {
        $this->weapon->damage($iluvatar);
    }

    public function equip(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    abstract public function salute();

    public function takeDamage($amount)
    {
        $this->hitPoints = $this->hitPoints - $amount;
    }
}