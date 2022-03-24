<?php

require "./connect.php";

$query_text = $_REQUEST['query'];
if($query_text == null){
    echo "<p>У вас не имеется запроса на вывод данных!</p>";
    echo "<a href='page4.php'>Повторите попытку!</a>";
}
$result = mysqli_query($link, $query_text);

$return_rows = false;
$uppercase_query_text = trim(strtoupper($query_text));
$location = strpos($uppercase_query_text, "CREATE");

if($location === false || $location > 0){
    $location = strpos($uppercase_query_text, "INSERT");
    if($location === false || $location > 0){
        $location = strpos($uppercase_query_text, "UPDATE");
        if($location === false || $location > 0){
            $location = strpos($uppercase_query_text, "DELETE");
            if($location === false || $location > 0){
                $location = strpos($uppercase_query_text, "DROP");
                if($location === false || $location > 0){
                    $return_rows = true;
                }
            }
        }
    }
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
}else{
    echo "<p>Следующий запрос был обработан успешно!</p>";
    echo "<p>{$query_text}</p>";
}

?>