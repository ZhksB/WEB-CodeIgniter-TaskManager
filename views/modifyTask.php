
<html>
<head>
    <meta charset="utf-8">
    <title>Расписание</title>
</head>
<body>

<?php
echo '<form action="/Tasks/modifyTask/' . $Id . '" method="post">
        <input type="hidden" name="RowNumber" value="' . $Id . '">
        <input type="date" name="Date" value="' . date("Y-m-d", (int)$DeadLine) . '">
        <input type="text" name="Task" value="' . $Task . '">
        <input name="SaveBtn" value="Сохранить" type="submit">
</form>'
?>

</body>
</html>
