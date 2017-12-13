<?php

namespace admin;

require_once("DBUtils.php");

use app\DBUtils;

if(!empty($_POST))
{
    if($_POST['action'] == 'add')
    {
        $result = DBUtils::addImage($_POST['alt'], $_FILES['img']);

        if($result !== true)
            $_SESSION['result'] = $result;

        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }
    else if($_POST['action'] == 'edit')
    {
        if($_FILES['img']['size'] === 0)
            $result = DBUtils::editImage($_POST['data-id'], null, $_POST['alt']);
        else
            $result = DBUtils::editImage($_POST['data-id'], $_FILES['img'], $_POST['alt']);

        if($result !== true)
            $_SESSION['result'] = $result;

        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }
    else if($_POST['action'] == 'delete')
    {
        $result = DBUtils::deleteImage($_POST['dataID']);
        echo $result;
        exit();
    }
}

$images = DBUtils::getAllImages();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Админ панель</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<h1>Админ панель</h1>
<h2><a href="add-image.html">Добавить</a></h2>

<table class="admin-table">
    <tr>
        <th>ID</th>
        <th>Alt</th>
        <th>Img</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach($images as $image): ?>
    <tr>
        <td><?=$image->getID();?></td>
        <td><?=$image->getAlt();?></td>
        <td><img width="100px" height="100px" src="<?=$image->getSrc();?>"></td>
        <td><a href="edit-image.php?id=<?=$image->getID();?>">Редактировать</a></td>
        <td class="delete-image" data-toggle="modal" data-target="#myModal" data-id="<?=$image->getID();?>">Удалить</td>
    </tr>
    <?php endforeach ?>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 100%; max-width: 250px;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удалить изображение?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-yes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-no">No</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    $('.delete-image').on( "click", function() {
        $('#modal-yes').attr("data-id", $(this).attr('data-id'));
    });

    $('#modal-yes').on( "click", function() {
        var data = {dataID: $(this).attr('data-id'), action: 'delete'};
        $.ajax({
            url: 'index.php',
            type: 'POST',
            data: data,
            error: function () {
                console.log('err');
            },
            success: function (result) {
                var el = 'td[data-id=' + data['dataID'] + ']';
                $(el).parent().remove();
            }
        });
    });
</script>
