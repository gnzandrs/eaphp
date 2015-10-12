<html>
<head>
    <title>Battle Mode - <?= $elf->getName() ?></title>
</head>
<body>

<table>
    <tr>
        <td>Name:</td>
        <td><?= $elf->getName() ?></td>
    </tr>
    <tr>
        <td>HitPoints:</td>
        <td><?= $elf->getHitPoints() ?>/td>
    </tr>
    <tr>
        <td>Abilities:</td>
        <td>Heal - Poem</td>
    </tr>
    <tr>
        <td>Weapon:</td>
        <td>
            <div id='equip_div'>
                <?
                if (is_null($elf->getWeapon()))
                {
                    ?>
                    <input type='button' id='equip_button' value='Equip' onclick='equip();'/>
                    <?
                }
                else {
                    $elf->getWeapon();
                }
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>