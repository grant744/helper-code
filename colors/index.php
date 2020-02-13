<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Таблица цветов</title>
    </head>

    <body>

<style>

body, html {
	width: 100%; height: 100%; padding: 0px; 
    margin: 0px;
}

.square {
    width: 100px; height: 100px;
    float: left; 
}
</style>

<?php
    $cycle_step = 1/16;

    for ($counter = 0; $counter <= 1; $counter = $counter + $cycle_step) 
    {
echo <<<END

    <div style="background-color: rgba(0, 0, 0, $counter)" class="square"></div>

END;
    }
?>

    </body>
</html>