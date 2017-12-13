<?php

namespace app;

require_once("DBUtils.php");

if(!empty($_POST['dataID']))
{
    $result = DBUtils::deleteImage($_POST['dataID']);
    echo $result;
    exit();
}

$image = DBUtils::getImage($_GET['id']);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Админ панель</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

<h1>Админ панель</h1>

<div>
    <form class="form-holder" action="index.php" method="post" enctype="multipart/form-data">
        <label for="alt">ALT</label>
        <input type="text" id="alt" name="alt" value="<?=$image->getAlt()?>" required>

        <div class="img-block">
            <label>Текущее изображение</label>
            <img width="50%" height="20%" src="<?=$image->getSrc();?>">
        </div>

        <!-- 30MB limit -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
        <input type="file" id="img" name="img">

        <input type="hidden" id="data-id" name="data-id" value="<?=$image->getID()?>">
        <input type="hidden" name="action" value="edit">

        <input type="submit" value="Редактировать">
    </form>
</div>

</body>
</html>