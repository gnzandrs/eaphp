<?php

namespace EaPhp\Http\Controllers;

use EaPHP\Domain\Races\Iluvatar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use EaPHP\Domain\GameEngine;
use EaPHP\Http\Views\View;

class BattleFieldController extends Controller
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

    public function attackAdvice()
    {
        return $this->gameEngine->getRacesRelationship();
    }

    public function loadBattle($name, $enemyRace)
    {
        $race               = $this->gameEngine->resolveRace($name);
        $enemy              = $this->gameEngine->getRandomEnemy($enemyRace);
        $battleField        = $this->gameEngine->getRandomBattleField();
        $battleField->addPlayer($enemy);
        $battleField->addPlayer($race);

        $view = new View('battle',  [
            'battle' => $battleField        ]);

        return $view->render();
    }
}
