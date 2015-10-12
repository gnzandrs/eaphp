<?php

namespace EaPhp\Http\Controllers;

use EaPHP\Domain\Races\Iluvatar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EaPHP\Domain\GameEngine;
use EaPHP\Http\Views\View;

class OrcController extends Controller
{
    private $gameEngine;

    public function __construct(GameEngine $gameEngine)
    {
        $this->gameEngine = $gameEngine;
    }

    public function index(Request $request)
    {
        exit('Nothing to do here!');
    }

    public function home($name)
    {
        $orc = $this->gameEngine->getOrc($name);

        $view = new View('orc',  [
            'orc' => $orc
        ]);

        return $view->render();
    }
}