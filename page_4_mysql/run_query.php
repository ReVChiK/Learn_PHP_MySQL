<?php

require "./connect.php";

$query_text = $_REQUEST['query'];
if($query_text == null){
    echo "<p>У вас не имеется запроса на вывод данных!</p>";
    echo "<a href='page4.php'>Повторите попытку!</a>";
}
$result = mysqli_query($link, $query_text);

$return_rows = true;
if(preg_match("/^[\t\r\n]*(CREATE|INSERT|UPDATE|DELETE|DROP)/i", $query_text)){
    $return_rows = false;
}


if($return_rows){
    echo "<p>Результаты вашего запроса:</p>";
    echo "<ul>";
    while($row = mysqli_fetch_row($result)){
        foreach($row as $key => $elem){
            echo "<li>{$row[$key]}</li>";
        }
    }
    echo "</ul>";
    echo "<a href='./page4.php'>Вернуться на страницу запроса!</a>";
}else{
    echo "<p>Следующий запрос был обработан успешно!</p>";
    echo "<p>{$query_text}</p>";
    echo "<a href='./page4.php'>Вернуться на страницу запроса!</a>";
}

?>