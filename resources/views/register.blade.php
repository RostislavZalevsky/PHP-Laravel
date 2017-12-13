<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>
</head>
<body>
<form action = "/user/register" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <label for="name">Name:</label>
    <input type = "text" id="name" name = "name" />
    <br/>
    <label for="username">Username:</label>
    <input type = "text" id="username" name = "username" />
    <br/>
    <label for="password">Password:</label>
    <input type = "password" id="password" name = "password" />
    <br/>
    <input type = "submit" value = "Register" />
</form>
</body>
</html>