<?php include_once('blocks/head.php');?>

<?php include_once('blocks/header.php');?>
<div class="container">
    <!-- нет товаров -->
    <div class="not-tovars">
        <h1>В корзине пока ничего нет</h1>
        <p>Выберете товары, которые хотите добавить <br> в корзину на главной странице  </p>
        <a href="index.php"> 
            <div class="back-to-index back-to-index-cart">
                Перейти на главную
            </div>
        </a>
    </div>
    <!--конец  нет товаров ///// выводе через php если нет данных от базы, если если есть смотри код ниже!-->

    <div class="main-cart">
        <a href="index.php"> 
            <div class="back-to-index">
                <i class="fa-solid fa-arrow-left">
                </i> Назад
            </div>
        </a>
        <div class="row">
            <div class="col-12 cart-wrapper">
                <div class="row">
                    <div class="col-8">
                        <!-- это выводи в цикле -->
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-4 cart-img">
                                        <img src="img/1.jpeg" alt="">
                                        <p>Удалить</p>
                                    </div>
                                    <div class="col-8 cart-def">
                                        <span>4 500 руб.</span>
                                        <p>Маска защитная <span>(2 шт)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- конец это выводи в цикле -->
                    </div>
                    <div class="col-4">
                        <div class="row ">
                            <div class="col-12 cart-block-price">
                                <p> ИТОГО <span>4 500 Руб.</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 cart-sposob-oplati-zagolovok">
                                <p>Выбрать способ оплаты</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_radio">
                                    <input id="radio-3" type="radio" name="radio" value="card" >
                                    <label for="radio-3" checked>Картой</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_radio">
                                    <input id="radio-4" type="radio" name="radio" value="nal">
                                    <label for="radio-4">Наличными при получении</label>
                                </div>
	
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-zakazat">
            <span> Заказать</span>
        </div>
    </div>
</div>
<?php include_once('blocks/footer.php');?>