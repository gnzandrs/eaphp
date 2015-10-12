<?php

namespace EaPHP\Domain;


use phpDocumentor\Reflection\DocBlock\Type\Collection;

class Field
{
    protected $name;

    protected $img;

    /**
     * @type Collection
     */
    protected $players;

    public function __construct($name, $img)
    {
        $this->name = $name;
        $this->img = $img;
        $this->players = new Collection();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function addPlayer(Iluvatar $iluvatar)
    {
        $this->players->add($iluvatar);
    }



}