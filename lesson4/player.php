<?php
$goalkeeper = [
    [
        'id' => 1,
        'name' => 'Журин Илья Дмитриевич',
        'img1' => 'ж2.jpg',
        'img2' => 'журин.png',
        'imgbig' => '1E2A2226.jpg',
        'height' => 178,
        'weight' =>76,
        'birth' => '12.08.1995',
        'info' => 'Илья Журин – вратарь, родился в Хабаровске, там же начал заниматься хоккеем. Дебютировал в молодежной
                    команде «Амурские Тигры» в сезоне 2011-2012 в МХЛ. В следующем сезоне принимал участие в чемпионате мира
                    среди игроков до 18 лет. По итогам сезона 2017/18 стал обладателем Кубка Континента и бронзовым призером чемпионата России'
    ],
    [
        'id' => 2,
        'name' => 'Соловьев Николай Романович',
        'img1' => 's2.jpg',
        'img2' => 'журин.png',
        'imgbig' => '1E2A5983.jpg',
        'height' => 175,
        'weight' =>70,
        'birth' => '30.09.1998',
        'info' => 'Николай Соловьев – вратарь, родился в Санкт-Петербурге, там же начал заниматься хоккеем. Дебютировал в молодежной
                    команде «Локомотив». По итогам сезона 2017/18 стал обладателем Кубка Континента и бронзовым призером чемпионата России'

    ],
];

$get = $_GET;
$id = $get['id'];

function getDatabyId($id, $array) {
    for ($i=0; $i<count($array); $i++) {
        if ($id==$array[$i]['id']) {
            return $array[$i];
        }
    }
}

$goalkeepers = getDatabyId($id, $goalkeeper);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><? echo $goalkeepers['name'];?></title>
    <link rel="stylesheet" href="css/newsstyle.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
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
                            <li><a href="team-page-l.html"> Лисы СПбГАСУ</a></li>
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
                    <li><a href="#"> Турниры</a></li>
                    <li><a href="team-page-l.html">Команды</a></li>
                    <li>Стадионы</li>
                    <li>Хоккеисты</li>
                </ul>
            </li>
        </ul>

    </div>


    <div class="flex-1 column-container lightblue">

        <div class="emptyl padding">
            <p class="shl">Команда "Лисы" Спбгасу</p>
        </div>

        <div class="row-container flex-7 lnbackground">
            <div class="flex-1"></div>
            <div class="flex-5">
                <img src="/lesson4/pics/<?php echo $goalkeepers['imgbig'];?>" class="pimg hiddenimg">
            </div>
            <div class="flex-1"></div>
        </div>

        <div class="row-container flex-7">
            <div class="flex-1"></div>
            <div class="flex-1 padding">
                <img src="/lesson4/pics/<?php echo $goalkeepers['img1'];?>" alt="img" class="plimg">
            </div>
            <div class="flex-1 padding">
                <p class="pldata padding">
                    <? echo $goalkeepers['name'];?>
                    <br>
                    Дата рождения <? echo $goalkeepers['birth'];?>
                    <br>
                    Вратарь
                    <br>
                    Рост <? echo $goalkeepers['height'];?> см
                    <br>
                    Вес <? echo $goalkeepers['weight'];?> кг
                </p>
            </div>
            <div class="flex-2 padding plinfoinvisible">
                <h3 class="plinfo">Об игроке</h3>
                <p class="plinfo">
                    <? echo $goalkeepers['info'];?>

                </p>
            </div>


            <div class="flex-1"></div>
        </div>

        <div class="row-container flex-7  plinfovisible">
            <div class="flex-1"></div>
            <div class="flex-5 padding ">
                <h3 class="plinfo">Об игроке</h3>
                <p class="plinfo">
                    <? echo $goalkeepers['info'];?>
                </p>
            </div>
            <div class="flex-1"></div>
        </div>

        <div class="emptyl padding">
            <p class="shl">Достижения</p>
        </div>

        <div class="row-container flex-7">
            <div class="flex-1"></div>
            <div id="achievm" class="flex-5"></div>
            <div class="flex-1"></div>
        </div>

        <div class="emptyl padding">
            <p class="shl">Статистика</p>
        </div>

        <div class="row-container flex-6">
            <div class="flex-1"></div>
            <div id='stat' class="flex-2 stat">
                <p>Очки</p>
                <div class="ct-series-a ct-slice-donut" id="chart1" style="display: block"></div>
            </div>
            <div class="flex-2 stat">
                <p>Очки</p>

            </div>
            <div class="flex-1"></div>
        </div>


    </div>

</div>

<script src="js/achievments.js"></script>
</body>
</html>
