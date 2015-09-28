<?php

namespace EaPHP\Domain\Races;

class Elf extends Iluvatar
{
    public function cordialSalute($friend)
    {
        return "Alassië nar i hendu i cenantet, meldonya {$friend}";
    }

    public function poem()
    {
        return 'Ai! Laurie lantar lassi súrinen' .PHP_EOL.
        'inyalemíne rámar aldaron'  .PHP_EOL.
        'inyali ettulielle turme márien' .PHP_EOL.
        'anduniesse la míruvórion' .PHP_EOL.
        'Varda telúmen falmar kírien' .PHP_EOL.
        'laurealassion ómar mailinon.' .PHP_EOL.
        'Elentári Vardan Oiolossëan' .PHP_EOL.
        'Tintallen máli ortelúmenen' .PHP_EOL.
        'arkandavá-le qantamalle túlier' .PHP_EOL.
        ' e falmalillon morne sindanórie' .PHP_EOL.
        'no mírinoite kallasilya Valimar.' .PHP_EOL;

    }

    public function salute()
    {
        return "Aiya, my name is {$this->name}";
    }

    public function healt(Iluvatar $iluvatar)
    {
        if($iluvatar instanceof Orc)
        {
            return "My elf power can't help you.";
        }

        $iluvatar->hitPoints = 10;
        return "Your health was restored my friend.";
    }
}