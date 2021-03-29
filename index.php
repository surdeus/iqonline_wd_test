<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="wbp_logo.png" type="image/png">
<script src="script.js"></script>

<title>Калькулятор - World Bank Publications</title>
  
</head>
<body>

<header>

  <div class="logo">
    <img src="wbp_logo.png" alt="World Bank Publications Logo">
    <div class="text">
      <div class="uppercase">world bank</div>
      <div class="capitalize">publications</div>
    </div>
  </div>
  
  <div class="contacts">
    <a class="phone-number" href="tel:88001005005">8-800-100-5005</a>
    <a class="phone-number" href="tel:+73452522000">+7(3452)522-000</a>
  </div>

</header>

<nav>

  <a href="#">Кредитные карты</a>
  <a class="choosen" href="#">Вклады</a>
  <a href="#">Дебетовая карта</a>
  <a href="#">Страхование</a>
  <a href="#">Друзья</a>
  <a href="#">Интернет-банк</a>

</nav>

<ul class="breadcrumb">
  <li><a href="#">Главная</a></li>
  <li><a href="#">Вклады</a></li>
  <li><a href="#">Калькулятор</a></li>
</ul>

<form id="calc-form" class="calc" action="" method="post">
  <div class="line">
    <label for="date">Дата оформления вклада</label>
    <input id="date" type="date"></input>
  <line>

  <div class="line">  
    <label for="sum">Сумма вклада</label>
    <input id="sum" type="number" min="1000" max="3000000" value="1000"></input>
    <!-- Библиотека не использована, т. к. это легко реализуется
         встроенными возможностями DOM-модели -->
    <input id="sum-range" class="range" type="range"
      min="1000" step="1000" max="3000000"
      oninput="updateNumberByRange('sum')"></input>
  </div>

  <div class="line">
    <label for="time" >Срок вклада</label>
    <select name="time" id="time">
      <option value="1">1 год</option>
      <option value="2">2 года</option>
      <option value="3">3 года</option>
      <option value="4">4 года</option>
      <option value="5">5 лет</option>
    </select>
  </div>

  
  <div id="should-refill" class="line">
    <label for="should-refill">Пополнение вклада</label>
    <input type="radio" name="should-refill" value="no" checked>Нет</input>
    <input type="radio" name="should-refill" value="yes">Да</input>
  </div>

  <div class="line">
    <label for="subadj">Сумма пополнения</label>
    <input id="sumadj" type="number" min="1000" max="3000000" value="1000"></input>
    <input id="sumadj-range" class="range" type="range"
      min="1000" step="1000" max="3000000"
      oninput="updateNumberByRange('sumadj')"></input>
  </div>

  <div class="line">
    <button type="submit">Рассчитать</button>
  </div>
</form>

<footer>
  <a href="#">Кредитные карты</a>
  <a href="#">Вклады</a>
  <a href="#">Дебетовая карта</a>
  <a href="#">Страхование</a>
  <a href="#">Друзья</a>
  <a href="#">Интернет-банк</a>
</footer>

</body>
</html>
