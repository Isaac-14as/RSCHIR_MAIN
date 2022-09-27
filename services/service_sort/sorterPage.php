<html lang="en">
<head>
    <title>Sort Page</title>
    <link rel="stylesheet" href="../style1.css" type="text/css"/>

</head>
<body>
<h1>Работа №2</h1>
<h2>Упражнение 2</h2>
<h2>Вариант 4. Сортировка выбором</h2>
<div class="main">
    <form class="form_1" method="GET">
        <div class="item">
            <input type="string" name="button1" class="form_control" id="inputNumber">
        </div>
        <div class="item">
            <button type="submit" class="btn">Нарисовать</button>
        </div>
    </form>
</div>
<?php
    include_once 'SelectionSort.php';
    include_once 'ConverterString.php';

    if (array_key_exists('button1', $_GET )){
        print_r($_GET['button1']);
        echo "<br/>";
        SelectionSort::outputArray(SelectionSort::sort(ConverterString::filterString($_GET['button1'])));
    }
?>
</table>
</body>
</html>