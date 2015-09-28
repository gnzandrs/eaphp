<html>
<head>
    <title>Welcome To Humans Kingdom!</title>
</head>
<body>

<ul>
    <?php
    foreach ($humans as $human): ?>
        <li>
            <h2>
                <?= $human->salute() ?>
            </h2>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>