<html>
<head>
    <title>Welcome To Elfs Kingdom!</title>
</head>
<body>

    <ul>
        <?php
        foreach ($elfs as $elf): ?>
            <li>
                <h2>
                    <?= $elf->salute() ?>
                </h2>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>