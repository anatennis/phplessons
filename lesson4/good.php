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

$get = $_GET;
$id = $get['id'];

function getDatabyId($id, $array) {
    for ($i=0; $i<3; $i++) {
        if ($id==$array[$i]['id']) {
            return $array[$i];
        }
    }
}

$good = getDatabyId($id, $goods);



?>
<html>
<head>
    <!--<link href="css/...">-->
</head>

<body>



<h4>Info</h4>
<div>
    <p><? echo $good['title']?></p>  <!--name-->
    <p><? echo $good['price']?></p>  <!--price-->
    <img src="<? echo $good['img'];?>" alt="<? echo $good['img'];?>">


</div>

</body>
</html>

