<h2>INDEX VIEW</h2>


<?php foreach ($articles as $article):?>
    <div class="article">
        <P>Название <?php echo $article['title']; ?></P>;
        <P>Описание <?php echo $article['description']; ?></P>;
        <p><a href="article/show/<?php echo $article['id']; ?>">Подробнее</a>;</p>
    </div>
<?php endforeach;?>

<?php foreach ($goods as $good):?>
    <div class="goods">
        <P>Название <?php echo $good['title']; ?></P>;
        <P>Описание <?php echo $good['description']; ?></P>;
    </div>
<?php endforeach;?>
