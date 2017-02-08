<?php

namespace EaPHP\Tools;

use EaPHP\Races\Iluvatar;

interface Ring
{
    protected $name;

    protected $manufacturer;

    protected $material;

    protected $power;

    /**
     * Ring constructor.
     * @param $name
     * @param $manufacturer
     * @param $material
     * @param $power
     */
    public function __construct($name, $manufacturer, $material, $power)
    {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->material = $material;
        $this->power = $power;
    }
}
