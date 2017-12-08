<?php

namespace admin;

require_once("DBUtils.php");

use app\DBUtils;




?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Админ панель</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Админ панель</h1>
<h2><a href="add-image.html">Добавить</a></h2>

<table class="admin-table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Text</th>
        <th>Img</th>
        <th>Counter</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post->getID(); ?></td>
            <td><?= $post->getTitle(); ?></td>
            <td><?= $post->getText(); ?></td>
            <td><img width="100px" height="100px" src="data:image;base64,<?=$post->getImage();?>"></td>
            <td><?= $post->getCounter(); ?></td>
            <td><a href="edit-post.php?id=<?= $post->getID(); ?>">Редактировать</a></td>
            <td class="delete-post" data-toggle="modal" data-target="#myModal" data-id="<?= $post->getID(); ?>">Удалить</td>
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
                <h4 class="modal-title">Удалить запись?</h4>
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
    $('.delete-post').on( "click", function() {
        $('#modal-yes').attr("data-id", $(this).attr('data-id'));
    });

    $('#modal-yes').on( "click", function() {
        var data = {dataID: $(this).attr('data-id'), action: 'remove'};
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
