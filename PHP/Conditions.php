<body>
    <?php
    date_default_timezone_set("Australia/Melbourne");
    $time = date("H:i:s");
    $morning = true;

    if (date("H") >= 12) {
        $morning = false;
    }

    ?>

    <h1>
        <?php
        echo "$time ";

        if ($morning) {
            echo "Morning";
        } else {
            echo "Afternoon";
        }
        ?>
    </h1>
</body>