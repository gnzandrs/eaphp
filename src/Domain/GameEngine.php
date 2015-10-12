<?php

namespace EaPHP\Domain;

use EaPHP\Domain\Races\Elf;
use EaPHP\Infrastructure\FakeDatabase;

class GameEngine
{
    /**
     * @type FakeDatabase
     */
    private $data;

    public function __construct(FakeDatabase $data)
    {
        $this->data = $data;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function listRaces()
    {
        return $this->data->races();
    }

    public function listHumans()
    {
        return $this->data->humans();
    }

    public function listElfs()
    {
        return $this->data->elfs();
    }

    public function listOrcs()
    {
        return $this->data->orcs();
    }

    public function getElf($name)
    {
        return $this->data->elf($name);
    }

    public function getHuman($name)
    {
        return $this->data->human($name);
    }

    public function getOrc($name)
    {
        return $this->data->orc($name);
    }

    /**
     * @param string
     * @return Iluvatar
     */
    public function getRandomEnemy($race)
    {
        if ($race == 'elf')
        {
            $elfs = $this->data->elfs();
            return $elfs->random(1);
        }

        elseif ($race == 'human')
        {
            $humans = $this->data->humans();
            return $humans->random(1);
        }

        elseif ($race == 'orc')
        {
            $orcs = $this->data->orcs();
            return $orcs->random(1);
        }

        else {
            \InvalidArgumentException::class;
        }

    }

    /**
     * @return array
     */
    public function getRacesRelationship()
    {
        $relationship = rand(0, 2);
        $message = [];

        if ($relationship == 0)
        {
            $message = [
                'code'      => '0',
                'message'   => 'You are free to attack.'
            ];

            return $message;
        }
        elseif ($relationship == 1)
        {
            $message = [
                'code'      => '1',
                'message'   => 'It would be wise stop the attack for preserve the good relationship...'
            ];

            return $message;
        }
        else {
            $message = [
                'code'      => '2',
                'message'   => 'They deserve to die!'
            ];

            return $message;
        }
    }

    /**
     * @return Field
     */
    public function getRandomBattleField()
    {
        return $this->data->randomField();
    }

    /**
     * @param string
     * @return Iluvatar
     */
    public function resolveRace($name)
    {
        $elfs   = $this->data->elfs();
        $humans = $this->data->humans();
        $orcs   =   $this->data->orcs();

        // search in collection...
        return $elfs->random(1);
    }
}
