<html>
<head>
    <title>Welcome To the Middle Earth.</title>
</head>
<body>
    <h1>Middle Earth</h1>
    <h3>Choose a race to get started!</h3>
    <ul>
        <?php
        foreach ($races as $race): ?>
            <li>
                <h2>
                    <a href='/<?= strtolower($race) ?>'><?= $race ?></a>
                </h2>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>