<?php
// Выбор блюда
if (isset($_POST['first_course'])) {$first_course=$_POST['first_course']; if ($first_course=='') {unset ($first_course);} }	
if (isset($_POST['second_course'])) {$second_course=$_POST['second_course']; if ($second_course=='') {unset ($second_course);} }	
if (isset($_POST['salad'])) {$salad=$_POST['salad']; if ($salad=='') {unset($salad);} }
if (isset($_POST['beverages'])) {$beverages=$_POST['beverages']; if ($beverages=='') {unset ($beverages);} }
if (isset($_POST['dessert'])) {$dessert=$_POST['dessert']; if ($dessert=='') {unset ($dessert);} }
// Стоимость блюд
if (isset($_POST['First_price'])) {$First_price=$_POST['First_price']; if ($First_price=='') {unset($First_price);} }
if (isset($_POST['Second_price'])) {$Second_price=$_POST['Second_price']; if ($Second_price=='') {unset ($Second_price);} }	
if (isset($_POST['Third_price'])) {$Third_price=$_POST['Third_price']; if ($Third_price=='') {unset ($Third_price);} }	
if (isset($_POST['Fourth_price'])) {$Fourth_price=$_POST['Fourth_price']; if ($Fourth_price=='') {unset ($Fourth_price);} }
if (isset($_POST['Fifth_price'])) {$Fifth_price=$_POST['Fifth_price']; if ($Fifth_price=='') {unset ($Fifth_price);} }
// Вид блюда
if (isset($_POST['course_list'])) {$course_list=$_POST['course_list']; if ($course_list=='') {unset ($course_list);} }
// Сумма счета
$count=$First_price+$Second_price+$Third_price+$Fourth_price+$Fifth_price;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Project</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="calculation clearfix">
    <h2>Ваш счет:</h2>
    <div class="menu">
        <p><?=$first_course?></p>
        <p><?=$second_course?></p>
        <p><?=$salad?></p>
        <p><?=$beverages?></p>
        <p><?=$dessert?></p>
    </div>
    <div class="price">
        <p><?=$First_price?></p>
        <p><?=$Second_price?></p>
        <p><?=$Third_price?></p>
        <p><?=$Fourth_price?></p>
        <p><?=$Fifth_price?></p>
    </div>
</div>
<div class="amount">
    <p>Вы выбрали свой: <span><?=$course_list?></span></p>
    <p>Сумма счета: <span><?=$count?></span> руб.</p>
</div>
</body>
</html>