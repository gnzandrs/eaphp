<?php

namespace EaPhp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EaPHP\Domain\Imprint;
use EaPHP\Http\Views\View;

class HomeController extends Controller
{
    private $imprint;

    public function __construct(Imprint $imprint)
    {
        $this->imprint = $imprint;
    }

    public function index(Request $request)
    {

        $races = $this->imprint->listRaces();

        $view = new View('home',  [
            'races' => $races
        ]);

        return $view->render();
    }

    public function elfs(Request $request)
    {
        $elfs = $this->imprint->listElfs();

        $view = new View('elfs',  [
            'elfs' => $elfs
        ]);

        return $view->render();
    }

    public function humans(Request $request)
    {
        $humans = $this->imprint->listHumans();

        $view = new View('humans',  [
            'humans' => $humans
        ]);

        return $view->render();
    }

    public function orcs(Request $request)
    {
        $orcs = $this->imprint->listOrcs();

        $view = new View('orcs',  [
            'orcs' => $orcs
        ]);

        return $view->render();
    }
}