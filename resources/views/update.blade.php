<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
<form action = "/edit/<?php echo $table[0]->Id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type = 'text' name = 'name' value = '<?php echo$table[0]->Name; ?>'/>
    <input type = 'submit' value = "Save" />
</form>
</body>
</html>