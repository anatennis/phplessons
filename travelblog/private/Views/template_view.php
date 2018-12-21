<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>



<nav>
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/goods">Товары</a></li>
        <li><a href="/articles">Статьи</a></li>
        <li><a href="/lk">ЛК</a></li>
    </ul>
</nav>

<div><?php include_once $view;?></div>
</body>

</html>