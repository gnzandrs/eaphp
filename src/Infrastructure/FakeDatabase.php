<?php

namespace EaPHP\Infrastructure;

use EaPHP\Domain\Field;
use Illuminate\Support\Collection;
use EaPHP\Domain\Races\Human;
use EaPHP\Domain\Races\Elf;
use EaPHP\Domain\Races\Orc;

class FakeDatabase
{
    /**
     * @return Collection
     */
    public function races()
    {
        return new Collection([
            1 => 'Elfs',
            2 => 'Humans',
            3 => 'Orcs'
        ]);
    }

    /**
     * @return Collection
     */
    public function humans()
    {
        return new Collection([
            1 => new Human('Aragorn', 10),
            2 => new Human('Boromir', 8),
            3 => new Human('Faramir', 8),
            4 => new Human('Eomer', 8),
            5 => new Human('Beren', 7)
        ]);
    }

    /**
     * @return Collection
     */
    public function elfs()
    {
        return new Collection([
            1 => new Elf('Elrond', 9),
            2 => new Elf('Thranduil', 9),
            3 => new Elf('Legolas', 10),
            4 => new Elf('Tauriel', 10),
            5 => new Elf('Luthien', 9),
            6 => new Elf('Celebrimbor', 8)
        ]);
    }

    /**
     * @return Collection
     */
    public function orcs()
    {
        return new Collection([
            1 => new Orc('Orc 1', 8),
            2 => new Orc('Orc 2', 4),
            3 => new Orc('Orc 3', 4),
            4 => new Orc('Orc 3', 4),
            5 => new Orc('Orc 3', 4)
        ]);
    }

    /**
     * @return Elf
     */
    public function elf($name)
    {
        //$elfs = $this->elfs();

        return new Elf($name, 4);
    }

    /**
     * @return Human
     */
    public function human($name)
    {
        return new Human($name, 3);
    }

    /**
     * @return Orc
     */
    public function orc($name)
    {
        return new Orc($name, 2);
    }

    /**
     * @return Field
     */
    public function randomField()
    {
        $collection = new Collection([
            1 => new Field('Minas Tirith','gondor/tirith.jpg'),
            2 => new Field('Minas Morgul','mordor/morgul.jpg'),
            3 => new Field('Rivendel', 'eriador/rivendel.jpg'),
            4 => new Field('Isengard', 'mountains/isengard.jpg')
        ]);

        return $collection->random(1);
    }
}
