<head>
    <title>Learning PHP</title>

    <style>
        body {
            display: grid;
            font-family: sans-serif;
        }

        li {
            margin: 0.5em;
        }
    </style>
</head>

<body>
    <?php

    $projects = ["Helloworld", "Conditions"]

    ?>

    <ul>
        <h1>Projects</h1>
        <?php foreach ($projects as $project) : ?>
            <li> <?= "<a href=\"$project.php\">$project</a>" ?></li>
        <?php endforeach; ?>
    </ul>
</body>