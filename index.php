<?php include_once('blocks/head.php');?>
<?php include_once('blocks/header.php');?>

<div class="container">
    <div class="row">
        <div class="col-3 left-menu">
        <div class="block-left-menu block-left-menu-1">
                    <h3>Возраст</h3>
                    <div class="mb-1">
                        <input type="checkbox" class="custom-checkbox" id="kids" name="kids" value="yes">
                        <label for="kids">Детям</label>
                    </div>
                    <div>
                        <input type="checkbox" class="custom-checkbox" id="adult" name="adult" value="yes">
                        <label for="adult">Взрослым</label>
                    </div>
                </div>
                <div class="block-left-menu block-left-menu-2">
                    <h3>Пол</h3>
                    <div class="mb-1">
                        <input type="checkbox" class="custom-checkbox" id="mail" name="mail" value="yes">
                        <label for="mail">Муж</label>
                    </div>
                    <div>
                        <input type="checkbox" class="custom-checkbox" id="femail" name="femail" value="yes">
                        <label for="femail">Жен</label>
                    </div>
                </div>
                <div class="block-left-menu block-left-menu-3">
                    <h3>Цена</h3>
                    <div class="row">
                        <div class="col-6">
                            <span class="span-menu">От</span>
                            <input type="input" class="input-menu" id="ot" name="ot" >
                        </div>
                        <div class="col-6">
                            <span class="span-menu">До</span>
                            <input type="input" class="input-menu" id="do" name="do" >
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-9">
            <div class="tovari">
                <div class="row">
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"> <!-- id тоавара в бд  -->
                        <img src="img/1.jpeg" alt=""><!-- путь к картинке тоавара в бд  -->
                        <span>4500 руб.</span><!-- цена  тоавара в бд  -->
                        <p>Маска защитная</p><!-- название тоавара в бд  -->
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"><img src="img/2.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Футболка</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"><img src="img/3.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Свитшот</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"> <img src="img/4.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Кепка</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"> <img src="img/5.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Футболка</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"><img src="img/6.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Свитшот</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"> <img src="img/7.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Кепка</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php"> <img src="img/8.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Футболка</p>
                    </a>
                </div>
                <div class="tovar col-3 " id="1"> 
                    <a href="tovar.php">  <img src="img/9.jpeg" alt="">
                        <span>4500 руб.</span>
                        <p>Футболка</p>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include_once('blocks/footer.php');?>



    
