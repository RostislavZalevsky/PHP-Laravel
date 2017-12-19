<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Table</title>
</head>
<body>
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type='text' name='name' placeholder="Name" />
        <input type = 'submit' value = "Insert"/>
</form>
</body>
</html>