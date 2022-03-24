<?php
    $_REQUEST[0] = 'password';
    $_REQUEST[1] = 345;
?>

<html>
 <head>
    <link href="./css/page3.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
    <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
    <div id="example">Пример 2.2</div>
    <div id="content">
        Глава 2. Синтаксис PHP: удивительный и таинственный 77
        <p>Это все, что записано в массиве $_REQUEST:</p>
        <?php
            foreach($_REQUEST as $key => $value) {
                echo "<p>Для " .$key . " имеется значение = " . $value . "</p>";
            }
        ?>
    </div>
    <div id="footer"></div>
 </body>
</html>