<html>
<head>
    <title>Welcome To Elfs Kingdom!</title>
</head>
<body>

    <p>Select a elf:</p>
    <ul>
        <?php
        foreach ($elfs as $elf): ?>
            <li>
                <h2>

                    <a href='/elf/<?= $elf->getName() ?>'><?= $elf->getName() ?></a>
                </h2>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>