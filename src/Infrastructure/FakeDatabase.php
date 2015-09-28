<?php

namespace EaPHP\Infrastructure;

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
            3 => new Human('Beren', 7)
        ]);
    }

    /**
     * @return Collection
     */
    public function elfs()
    {
        return new Collection([
            1 => new Elf('Elrond', 10),
            2 => new Elf('Legolas', 10),
            3 => new Elf('Luthien', 9)
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
            3 => new Orc('Orc 3', 4)
        ]);
    }
}