<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="wbp_logo.png" type="image/png">
<script src="script.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


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
  <div class="line"><div class="left center"><h1>Калькулятор</h1></div></div>
  <div class="line">
  <div class="left">
    <label for="date">Дата оформления вклада</label>
  </div>
  <div class="center">
    <input id="datepicker" type="text" name="date">
  </div>
  </div>

  <div class="line">
    <div class="left">  
      <label for="sum">Сумма вклада</label>
    </div>
    <div class="center">
      <input id="sum" name="sum" type="number" min="1000" step="1000" max="3000000" value="1000">
    </div>
    <div class="right"><input id="sum-range" type="range"
      min="1000" step="1000" max="3000000"
      oninput="updateNumberByRange('sum')"></div>
  </div>
  
  <div class="line">
    <div class="left">
      <label for="time" >Срок вклада</label>
    </div>
    <div class="center">
      <select name="time" id="time">
        <option value="1">1 год</option>
        <option value="2">2 года</option>
        <option value="3">3 года</option>
        <option value="4">4 года</option>
        <option value="5">5 лет</option>
      </select>
    </div>
  </div>


  <div class="line">
    <div class="left">
      <label for="should-refill">Пополнение вклада</label>
    </div>
    <div id="should-refill" class="center">
      <input type="radio" name="should-refill" value="no" checked>
      <label for="should-refill-no">Нет</label>
      <input id="should-refill-yes" type="radio" name="should-refill" value="yes">
      <label for="should-refill-yes">Да</label>
    </div>
  </div>
  
  <div class="line">
    <div class="left">
      <label for="sumadj">Сумма пополнения</label>
    </div>
    <div class="center">
      <input id="sumadj" type="number" name="sumadj"
          min="1000" step="1000" max="3000000" value="1000">
    </div>
    <div class="right"><input id="sumadj-range" type="range"
        min="1000" step="1000" max="3000000"
        oninput="updateNumberByRange('sumadj')"></div>
  </div>

  <div class="line">
      <button type="button" onclick="loadCalculation()">Рассчитать</button>
      <div id="calculation"></div>
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
