<?php

    $file_cabinet['first_name'] = "Derek";
    $file_cabinet['last_name'] = "Trucks";
    $file_cabinet['email'] = "derek@Trucks.com";
    $file_cabinet['facebook_url'] = "http://www.facebook.com/DerekTrucks";
    $file_cabinet['twitter_id'] = "@derekansusan";


    $first_name = $file_cabinet['first_name'];
    $last_name = $file_cabinet['last_name'];
    $email = $file_cabinet['email'];
    $facebook_url = $file_cabinet['facebook_url'];
    $twitter_id = $file_cabinet['twitter_id'];
    
?>

<html>
 <head>
    <link href="./css/style2.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
    <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
    <div id="example">Пример 2.1</div>
    <div id="content">
        <p>Это запись той информации, которую вы отправили:</p>
        <p>
        Имя: <?php echo $first_name . ' ' . $last_name; ?><br />
        Фамилия: <?php echo $last_name; ?><br />
        Адрес электронной почты: <?php echo $email; ?><br />
        URL-адрес Facebook: <a href='<?php echo $facebook_url?>'>Facebook</a><br />
        Идентификатор в Twitter: <a href='<?php echo $twitter_url; ?>'>Twitter_ID</a><br />
        </p>
    </div>
    <div id="footer"></div>
</body>
</html>
