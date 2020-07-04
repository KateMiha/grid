<?php
require_once ("../header-admin.php")
?>
    <div class="container-admin">
        <div class="content-admin">
            <form method="post" action="../admin/index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название:
                    <br>
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <br>
                <label>
                    Дата:
                    <br>
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <br>
                <label>
                    Содержимое:
                    <br>
                    <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                </label>
                <br>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
    </div>
<?php
require_once ("../footer.php")
?>