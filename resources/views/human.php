<html>
<head>
    <title>Human Kingdom - <?= $human->getName() ?></title>
</head>
<body>

<table>
    <tr>
        <td>Name:</td>
        <td><?= $human->getName() ?></td>
    </tr>
    <tr>
        <td>HitPoints:</td>
        <td><?= $human->getHitPoints() ?>/td>
    </tr>
    <tr>
        <td>Abilities:</td>
        <td></td>
    </tr>
    <tr>
        <td>Weapon:</td>
        <td>
            <div id='equip_div'>
                <?
                if (is_null($human->getWeapon()))
                {
                    ?>
                    <input type='button' id='equip_button' value='Equip' onclick='equip();'/>
                    <?
                }
                else {
                    $human->getWeapon();
                }
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>