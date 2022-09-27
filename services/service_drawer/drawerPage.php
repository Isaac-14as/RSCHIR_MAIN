<html lang="en">
<head>
    <title>Drawer</title>
    <link rel="stylesheet" href="../style1.css" type="text/css"/>

</head>
<body>
<h1>Работа №2</h1>
<h2>Упражнение 1</h2>
<div class="main">
    <form class="form_1" method="GET">
        <div class="item">
            <input type="number" name="button1"  min="1" class="form_control" id="inputNumber">
        </div>
        <div class="item">
            <button type="submit" class="btn">Нарисовать</button>
        </div>
    </form>
</div>

<?php
    include_once 'Drawer.php';
    include_once 'Decoder.php';
    $drawer = new Drawer();
    $decoder = new Decoder();
    if (array_key_exists('button1', $_GET )){
        print_r ($decoder->getParameters($_GET['button1']));
        $drawer->draw($decoder->getParameters($_GET['button1']));
    }
?>
</table>
</body>
</html>