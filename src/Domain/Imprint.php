<?php

namespace EaPHP\Domain;

use EaPHP\Infrastructure\FakeDatabase;

class Imprint
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
}