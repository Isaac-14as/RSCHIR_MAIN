<html lang="en">
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../style1.css" type="text/css"/>
</head>
<body >
<h1>Работа №2</h1>
<h2>Упражнение 3</h2>
<div class="container">
    <form class="main" method="GET">
        <div class="item">
            <button type="submit" name="button1"  class="btn">ls</button>
        </div>
        <div class="item">
            <button type="submit" name="button2"  class="btn">ps</button>
        </div>
        <div class="item">
            <button type="submit" name="button3"  class="btn">whoami</button>
        </div>
        <div class="item">
            <button type="submit" name="button4"  class="btn"> id</button>
        </div>
        <div class="item">
            <button type="submit" name="button5"  class="btn">pwd</button>
        </div>
    </form>
</div>
<?php
    include_once 'AdminCommand.php';
    $result = array();
    if (array_key_exists('button1', $_GET )):
        $result=(AdminCommand::getAnswerCommand('ls'));
    elseif (array_key_exists('button2', $_GET)):
        $result=(AdminCommand::getAnswerCommand('ps'));
    elseif (array_key_exists('button3', $_GET)):
        $result=(AdminCommand::getAnswerCommand('whoami'));
    elseif (array_key_exists('button4', $_GET)):
        $result=(AdminCommand::getAnswerCommand('id'));
    elseif (array_key_exists('button5', $_GET)):
        $result=(AdminCommand::getAnswerCommand('pwd'));
    endif;
    AdminCommand::printResultArray($result);
?>
</table>
</body>
</html>