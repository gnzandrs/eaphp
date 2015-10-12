<?php

namespace EaPhp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EaPHP\Domain\GameEngine;
use EaPHP\Http\Views\View;

class HomeController extends Controller
{
    private $gameEngine;

    public function __construct(GameEngine $gameEngine)
    {
        $this->gameEngine = $gameEngine;
    }

    public function index(Request $request)
    {

        $races = $this->gameEngine->listRaces();

        $view = new View('home',  [
            'races' => $races
        ]);

        return $view->render();
    }

    public function elfs(Request $request)
    {
        $elfs = $this->gameEngine->listElfs();

        $view = new View('elfs',  [
            'elfs' => $elfs
        ]);

        return $view->render();
    }

    public function humans(Request $request)
    {
        $humans = $this->gameEngine->listHumans();

        $view = new View('humans',  [
            'humans' => $humans
        ]);

        return $view->render();
    }

    public function orcs(Request $request)
    {
        $orcs = $this->gameEngine->listOrcs();

        $view = new View('orcs',  [
            'orcs' => $orcs
        ]);

        return $view->render();
    }
}