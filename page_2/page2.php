<?php

    require "../page_4_mysql/connect.php";

    $user_id = $_REQUEST['user_id'];

    $first_name = trim($_REQUEST['first_name']);
    $last_name = trim($_REQUEST['last_name']);
    $email = trim($_REQUEST['email']);
    $bio = trim($_REQUEST['bio']);
    $facebook_url = str_replace("facebook.org", "facebook.com", trim($_REQUEST['facebook_url']));
    $position = strpos($facebook_url, "facebook.com");
    if ($position === false) {
        $facebook_url = "http://www.facebook.com/" . $facebook_url;
    }

    $twitter_handle = trim($_REQUEST['twitter_handle']);
    $twitter_url = "http://www.twitter.com/";
    $position = strpos($twitter_handle, "@");
    if ($position === false) {
        $twitter_url = $twitter_url . $twitter_handle;
    } else {
        $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
    }

    $insert_sql = "INSERT INTO users (first_name, last_name, " . "email, facebook_url, twitter_handle, bio) " . "VALUES ('{$first_name}', '{$last_name}', '{$email}', " . "'{$facebook_url}', '{$twitter_handle}', '{$bio}');";

    $query_result = mysqli_query($link, $insert_sql);

    header("Location: page2.php?user_id=" . mysqli_insert_id());
?>

<html>
    <head>
        <link href="./css/style2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
        <div id="example">Пример 6.1</div>
        <div id="content">
            <p>Это запись той информации, которую вы отправили:</p>
            <p>
                Имя: <?php echo $first_name . " " . $last_name; ?><br />
                Адрес электронной почты: <?php echo $email; ?><br />
                <a href="<?php echo $facebook_url; ?>">Ваша страница на Facebook</a>
                <br />
                <a href="<?php echo $twitter_url; ?>">Проверьте свой Twitter-канал</a>
                <br />
                <p class="bio"><?php echo $bio; ?></p>
            </p>
        </div>
        <div id="footer"></div>
    </body>
</html>

