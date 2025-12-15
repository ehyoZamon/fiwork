<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
<style>
.accordion{
  width:450px;
  margin:30px auto;
  font-family:Arial;
}
.plan{border:1px solid #ddd;margin-bottom:15px;border-radius:6px;overflow:hidden;}
.plan-header{
  padding:15px;
  background:#fff;
  font-size:20px;
  cursor:pointer;
  font-weight:600;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.plan.active .plan-header{
  background:#f1f7ff;
  border-bottom:1px solid #ddd;
}
.plan-body{
  display:none;
  padding:15px;
  background:#fff;
}
.plan.active .plan-body{display:block;}
.price{color:#53a600;font-weight:bold;}
.arrow{transition:0.3s;}
.plan.active .arrow{

</style>
</head>
<body>

<div class="accordion">

  <!-- План -->
  <div class="plan">
    <div class="plan-header" data-price="2500">
      <span class="price">2 500 ₽</span> Эконом
      <div class="arrow">▼</div>
    </div>
    <div class="plan-body">
      <ul>
        <li>2 правки</li>
        <li>1 день</li>
      </ul>

      <button class="order-btn">Заказать за 2500 ₽</button>
    </div>
  </div>

  <!-- План -->
  <div class="plan active">
    <div class="plan-header" data-price="5000">
      <span class="price">5 000 ₽</span> Стандарт
      <div class="arrow">▼</div>
    </div>

    <div class="plan-body">
      <ul>
        <li>Доработка до 100%</li>
        <li>3 дня</li>
        <li>В нескольких цветах</li>
        <li>Фавикон</li>
      </ul>

      <h4>Добавить к заказу</h4>

      <label>
        <input type="checkbox" class="extra" data-add="1500">
        Срочное выполнение +1500 ₽
      </label>

      <label>
        <input type="checkbox" class="extra" data-add="1200">
        Печать +1200 ₽
      </label>

      <button class="order-btn">Заказать за 5000 ₽</button>
    </div>
  </div>

  <!-- План -->
  <div class="plan">
    <div class="plan-header" data-price="7000">
      <span class="price">7 000 ₽</span> Бизнес
      <div class="arrow">▼</div>
    </div>
    <div class="plan-body">
      <ul>
        <li>VIP сервис</li>
        <li>5 дней</li>
      </ul>

      <button class="order-btn">Заказать за 7000 ₽</button>
    </div>
  </div>

</div>

</body>
</html>
