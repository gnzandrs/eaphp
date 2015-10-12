<?php

namespace EaPhp\Http\Controllers;

use EaPHP\Domain\Races\Iluvatar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EaPHP\Domain\GameEngine;
use EaPHP\Http\Views\View;

class ElfController extends Controller
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
        $elf = $this->gameEngine->getElf($name);

        $view = new View('elf',  [
            'elf' => $elf
        ]);

        return $view->render();
    }
}