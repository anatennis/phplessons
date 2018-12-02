<?php
$goalkeeper = [
    [
        'id' => 1,
        'name' => 'Журин Илья',
        'img1' => 'ж2.jpg',
        'img2' => 'журин.png'
    ],
    [
        'id' => 2,
        'name' => 'Николай Соловьев',
        'img1' => 's2.jpg',
        'img2' => 'журин.png'
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Лисы СПбГАСУ </title>
    <link rel="stylesheet" href="css/newsstyle.css">
</head>
<body>

<div class="container column-container">

    <div class="row-container hbackground">
        <div class="flex-1 btransparent">
            <img src="pics/shlspb.png" class="logo padding">
        </div>
        <div class="column-container flex-5">
            <div class="flex-container2 flex-1">
                <h1 class="shl padding" style="margin-left: 3%">Saint-petersburg student hockey league</h1>
            </div>
            <div class="flex-container2 flex-1 hiddenmenu">
                <ul class="flex-container2 menu">
                    <li><a href="#"> Турниры </a></li>
                    <li><a href="#"> Команды </a>
                        <ul class="submenu">
                            <li><a href="teaml.html"> Лисы СПбГАСУ</a></li>
                            <li>Волки ЛТУ</li>
                            <li>Барсы ИТМО</li>
                        </ul>
                    </li>
                    <li><a href="#"> Стадионы </a></li>
                    <li><a href="#"> Хоккеисты </a></li>
                </ul>
            </div>

        </div>

    </div>

    <div class="xsinvisible emptyl">

        <ul class="flex-container2 menu  xsinvisible">
            <li><a href="#"> Меню </a>
                <ul class="submenu">
                    <li><a href="team.html"> Лисы СПбГАСУ</a></li>
                    <li>Волки ЛТУ</li>
                    <li>Барсы ИТМО</li>
                </ul>
            </li>
        </ul>

    </div>



    <div class="flex-1 column-container lightblue">
        <div class=" emptyl padding">
            <p class="shl">Команда "Лисы" Спбгасу</p>

        </div>



        <div class="flex-1 row-container" style="flex-wrap: wrap">    <!--flex-container4-->
            <div class=" amplual">
                <p class="shl padding">Вратари</p>

            </div>

            <? foreach ($goalkeeper as $goalkeepers) :?>
                <div class="flex-1 padding5">
                    <a href="player.php?id=<?php echo $goalkeepers['id'];?>">
                        <img src="/lesson4/pics/<? echo $goalkeepers['img1'];?>" alt="img" class="plimg hiddenimg">
                        <img src="/lesson4/pics/<? echo $goalkeepers['img2'];?>" class="visibleimg plimgxs">

                    </a>
                </div>

            <?php endforeach;?>

          <!--  <div class="flex-1  padding5">
                <a href="player.html">
                    <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg ">
                    <img src="pics/журин.png" class="visibleimg plimgxs">
                    <div class="shl xsinvisible">Илья Журин</div>
                </a>

            </div>
            <div class="flex-1  padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <div class="shl xsinvisible">Илья Журин</div>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">->
            </div>

            <div class="flex-1  padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <div class="shl xsinvisible">Илья Журин</div>
            </div>-->

            <div class="flex-1  padding5"></div>
            <div class="flex-1  padding5"></div>

        </div>

        <div class="flex-5 row-container" style="flex-wrap: wrap">
            <div class=" amplual">
                <p class="shl padding">Защитники</p>

            </div>

            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">-->

            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">-->

            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">-->

            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">-->

            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
                <!--<img src="pics/журин.png" alt="img" class="plimgxs hiddenimg">-->

            </div>


        </div>

        <div class="flex-5 row-container" style="flex-wrap: wrap">
            <div class=" amplual">
                <p class="shl padding">Нападающие</p>

            </div>

            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>
            <div class="flex-1 padding5">
                <img src="pics/ж2.jpg" alt="img" class="plimg hiddenimg">
                <img src="pics/журин.png" class="visibleimg plimgxs">
                <p class="shl xsinvisible">Илья Журин</p>
            </div>

        </div>


    </div>

</div>


</body>
</html>
