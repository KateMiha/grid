<?php
require_once ("header.php");
?>
<div class="container-article">
    <div class="bar-left">
        <div class="left-menu">
            <h4>Популярные статьи:</h4>
            <ul>
                <li><a href="#">Интересное</a><br></li>
                <li><a href="#">Интересное</a><br></li>
                <li><a href="#">Интересное</a><br></li>
            </ul>
        </div>
    </div>
    <div class="content-article">
        <div class="article">
            <h3><?=$articles['title']?></h3>
            <p><?=$articles['content']?></p>
            <em>Опубликовано: <?=$articles['date']?></em>
        </div>
    </div>
</div>
<?php
require_once ("footer.php")
?>