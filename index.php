<?php
//menu
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
//Установка локали и даты
setlocale(LC_ALL, "russian");
$day = strftime ('%d');
$mon = strftime ('%B');
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime ('%Y');
$hour = (int)strftime('%H');
$welcome = '';
#$hour = $welcome;
#$welcome = iconv('windows-1251', 'utf-8', $welcome);
if($hour>0 and $hour<6){
    $welocome = "Доброй ночи";
}elseif($hour>=6 and $hour<12){
    $welcome = "Доброе утро";
}elseif($hour>=12 and $hour<18){
    $welcome = "Добрый день";
}elseif($hour>=18 and $hour<23){
    $welocome = "Добрый вечер";
}else {
    $welocome = "Добрый вечер";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Сайт нашей школы</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div id="header">
        <!-- Верхняя часть страницы -->
        <?php
        require_once "inc/top.inc.php";
        ?>
        <!-- Верхняя часть страницы -->
    </div>

    <div id="content">
        <!-- Заголовок -->
        <h1>
            <?=$welcome?>, Гость!</h1>
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <blockquote>
            <?php
        #echo strftime ('Сегодня %d-%m-%Y');
        echo "Сегодня $day $mon, $year";
        ?>
        </blockquote>
        <?
        require_once "inc/index.inc.php";
        ?>
        <!-- Область основного контента -->
    </div>
    <div id="nav">
        <!-- Навигация -->
        <?
        require_once "inc/menu.inc.php";
        ?>
        <!-- Меню -->
        
        <!-- Меню -->
        <!-- Навигация -->
    </div>
    <div id="footer">
        <!-- Нижняя часть страницы -->
        <?
        require_once "inc/bottom.inc.php";
        ?>
        <!-- Нижняя часть страницы -->
    </div>
</body>

</html>