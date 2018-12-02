<?php

$goods = [
    [
        'id' => 1,
        'title' => 'Piano',
        'price' => 234,
        'img' => 'piano.png'
    ],
    [
        'id' => 2,
        'title' => 'Drum',
        'price' => 352,
        'img' => 'drum.png'
    ],
    [
        'id' => 3,
        'title' => 'Guitar',
        'price' => 155,
        'img' => 'guitar.png'
    ]
];

?>

<div class="goods">
    <? foreach ($goods as $arr):?>
        <div class="one-good">
            <p><? echo $arr['title'];?></p> <!-- название -->
            <p><? echo $arr['price'];?></p> <!-- цена -->
            <p>
                <a href="good.php?id=<?php echo $arr['id'];?>">
                    Подробнее
                </a>
            </p> <!-- id -->
            <img src="/img/<? echo $arr['img'];?>"
                 alt="<? echo $arr['img'];?>">
        </div>
    <?php endforeach;?>
</div>
