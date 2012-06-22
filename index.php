<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bbone app</title>
        <script type="text/javascript" src="underscore"></script>
        <script type="text/javascript" src="jquery-1.7.2"></script>
        <script type="text/javascript" src="backbone.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <p>BBone app</p>
        <div id="menu"> <!-- Блок меню -->
    <ul>
        <li><a href="#!/">Start</a></li>
        <li><a href="#!/success">Success</a></li>
        <li><a href="#!/error">Error</a></li>
    </ul>
</div>
<div id="start" class="block">
    <div class="userplace">
        <label for="username">Имя пользователя: </label>
        <input type="text" id="username" />
    </div>
    <div class="buttonplace">
        <input type="button" value="Проверить" />
    </div>
</div>
<div id="error" class="block">
    Ошибка такой пользователь не найден.
</div>
<div id="success" class="block">
    Пользователь найден.
</div>
    </body>
</html>
