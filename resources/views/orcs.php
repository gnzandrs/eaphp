<html>
<head>
    <title>Welcome To Orcs Land!</title>
</head>
<body>

<ul>
    <?php
    foreach ($orcs as $orc): ?>
        <li>
            <h2>
                <?= $orc->salute() ?>
            </h2>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>