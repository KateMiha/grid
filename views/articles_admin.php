<?php
require_once ("../header-admin.php")
?>
<div class="container-admin">
    <div class="content-admin">
        <table>
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($articles as $a):?>
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td><a href="../admin/index.php?action=edit&id=<?=$a['id']?>">Редактировать</a> </td>
                <td><a href="../admin/index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
<?php
require_once ("../footer.php")
?>
