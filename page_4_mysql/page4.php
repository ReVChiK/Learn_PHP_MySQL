<!DOCTYPE html>
<html lang="en">
<head>
    <title>Php_Learn_MySQL</title>
    <link rel="stylesheet" href="./css/style_page4.css">
</head>
<body>
    <div id="header">
        <h1>PHP & MySQL: The Missing Manual</h1>
    </div>
    <div id="example">Пример 4.2</div>
    <div id="content">
        <h1>Средство запуска SQL-запросов</h1>
        <p>Введите свой SQL-запрос в это поле:</p>
        <form action="./run_query.php" method="POST">
            <fieldset>
                <textarea id="query_text" name="query"
                cols="65" rows="8"></textarea>
            </fieldset>
            <br />
            <fieldset class="center">
                <input type="submit" value="Запуск запроса" />
                <input type="reset" value="Очистка и перезапуск" />
            </fieldset>
        </form>
    </div>
</body>
</html>