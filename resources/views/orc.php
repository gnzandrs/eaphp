<html>
<head>
    <title>Orc Pool - <?= $orc->getName() ?></title>
</head>
<body>

<table>
    <tr>
        <td>Name:</td>
        <td><?= $orc->getName() ?></td>
    </tr>
    <tr>
        <td>HitPoints:</td>
        <td><?= $orc->getHitPoints() ?>/td>
    </tr>
    <tr>
        <td>Abilities:</td>
        <td>Insult</td>
    </tr>
    <tr>
        <td>Weapon:</td>
        <td>
            <div id='equip_div'>
                <?
                if (is_null($orc->getWeapon()))
                {
                    ?>
                    <input type='button' id='equip_button' value='Equip' onclick='equip();'/>
                    <?
                }
                else {
                    $orc->getWeapon();
                }
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>