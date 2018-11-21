
<?php


/*2 . Дан массив [3, 1, 6, 0, 4, 5].
С помощью цикла foreach найдите сумму квадратов элементов этого массива.*/
$arr = [3, 1, 6, 0, 4, 5];
$sum = 0;
foreach ($arr as &$value) {
    $sum += pow($value, 2);
}
echo "$sum<br>";

/*3. Нарисуйте треугольник (или ромб) из символов *.
Высота треугольника равна 15. */

$var = 1;
while ($var<=15) {
    for ($i=0;$i<$var;$i++) {
        echo "*";
    }
    echo "<br>";
    $var++;
}

/*4. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите жирным.
Текущий день можно получить с помощью функции date.
Название дней выводить по-русски*/
/*mb_internal_encoding('UTF-8');
$juice = "апельсин";
echo mb_substr($juice, 1, 2);*/
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
for ($i=0; $i<7; $i++) {
    if ($i+1 == date("w")) {
        echo "<strong>$days[$i] - </strong>";
    }
    else {
        echo "$days[$i] - ";
    }
}
echo "<br>";
/*
5.Отсортировать массив по 'price' */
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

usort($arr, 'ComPr');
function ComPr($a, $b) {
    if ($a['price'] == $b['price']) return 0;
    return $a['price'] > $b['price'] ? 1 : -1;
}
var_dump($arr);

?>