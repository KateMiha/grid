<?php
require_once ("header.php");
?>
<div class="container-articles">
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
    <div class="content-articles">
        <?php foreach ($articles as $a):?>
        <div class="article">
            <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <p> <?=articles_intro($a['content'])?> ...</p>

            <em>Опубликовано: <?=$a['date']?></em>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?php
require_once ("footer.php")
?>