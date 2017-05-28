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
<form action="results.php" class="form" method="post">
    <div class="menu">
        <h2>Введите блюдо:</h2>
        <label for="first_course">Первое блюдо:</label>
        <input type="text" id="first_course" name="first_course" placeholder="Введите значение">
        <label for="second_course">Второе блюдо:</label>
        <input type="text" id="second_course" name="second_course" placeholder="Введите значение">
        <label for="salad">Салат:</label>
        <input type="text" id="salad" name="salad" placeholder="Введите значение">
        <label for="beverages">Напитки:</label>
        <input type="text" id="beverages" name="beverages" placeholder="Введите значение">
        <label for="dessert">Десерт:</label>
        <input type="text" id="dessert" name="dessert" placeholder="Введите значение">
    </div>
    <div class="price">
        <h2>Введите стоимость:</h2>
        <label for="First_price">Стоимость первого блюда:</label>
        <input type="text" id="First_price" name="First_price" placeholder="Введите значение">
        <label for="Second_price">Стоимость второго блюда:</label>
        <input type="text" id="Second_price" name="Second_price" placeholder="Введите значение">
        <label for="Third_price">Стоимость салата:</label>
        <input type="text" id="Third_price" name="Third_price" placeholder="Введите значение">
        <label for="Fourth_price">Стоимость напитков:</label>
        <input type="text" id="Fourth_price" name="Fourth_price" placeholder="Введите значение">
        <label for="Fifth_price">Стоимость десерта:</label>
        <input type="text" id="Fifth_price" name="Fifth_price" placeholder="Введите значение">
    </div>
    <select name="course_list" class="course_list">
        <option value="Завтрак">Завтрак</option>
        <option value="Обед">Обед</option>
        <option value="Ужин">Ужин</option>
    </select>
    <button type="submit" class="bth">Заказать</button>
</form>
</body>
</html>