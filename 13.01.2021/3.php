<?php
session_start();
$color = false;
/*$_SESSION=$_POST['select'];*/
if (isset($_POST['do'])) {
    if ($_POST['select'] == 'red') {
        $color = 'style = "background-color: #F44;"';
        $_SESSION=$_POST['select'];
    }
    elseif ($_POST['select'] == 'blue') {
        $color = 'style = "background-color: #4DD;"';
        $_SESSION=$_POST['select'];
    }
    elseif ($_POST['select'] == 'green') {
        $color = 'style = "background-color: #CA1;"';
        $_SESSION=$_POST['select'];
    }
}

?>
<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body <?=$color?>>
<form name="my" action="<?=$_SERVER['PHP_SELF']?>"method="post">
    <select name ="select" value="<?=$name2?>">
        <option value="red"  <?php if ($_POST['select'] == 'red') echo 'selected' ; ?> name="Красный">Красный</option>
        <option value="blue" <?php if ($_POST['select'] == 'blue') echo 'selected' ; ?> name="Синий">Синий</option>
        <option value="green" <?php if ($_POST['select'] == 'green') echo 'selected' ; ?> name="Желтый">Желтый</option>
    </select>
    <input type="submit" name="do" value="Push">
</form>
</body>
</html>