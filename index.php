<?php
    $title = "Главная страница";
    include 'header.php';
?>

<div class="container">

    <div class="main">
        <div class="main-left">
            <div class="main-left-text">
                <span>Без проблемная доставка купленных <br> вещей из США, Европы и Азии <br> в Россию <br></span>
                Сэкономьте на покупках и наслаждайтесь мировыми брендами — <br> наш сервис позволяет вам легко и удобно заказывать товары  <br> со всего мира и получать их в России
            </div>

            <div class="main-left-img">
                <img src="/img/mainimg.png" alt="main">
            </div>
        </div>

        <div class="main-right">

            <div class="main-right-header">
                Калькулятор доставки
            </div>

            <div class="main-right-text">
                Посчитайте, сколько будет стоить перевозка <br> покупки из зарубежа
            </div>

            <div class="main-right-form">
                    <form class="form-grid" action="check.php" method="post">
                        <input class="item-1" type="text" name="name" placeholder="Имя">
                        <input type="email" name="email" placeholder="Почта">
                        <input type="tel" name="phone" placeholder="Телефон">
                        <input type="text" name="square" placeholder="Общая площадь, м²">
                        <input type="text" name="weight" placeholder="Вес, кг">
                        <input type="text" name="country_buy" placeholder="Страна покупки">
                        <input type="text" name="city_buy" placeholder="Город покупки">
                        <input type="text" name="field" placeholder="Область доставки">
                        <input type="text" name="city_deliv" placeholder="Город доставки">
                        <button class="item-2">Заказать расчет</button>
                    </form>
            </div>

            <div class="main-right-btn">

            </div>

        </div>
    </div>

    <div class="comment">

    </div>

    <div class="question">

    </div>

</div>

<?php
    include 'footer.php';
?>
