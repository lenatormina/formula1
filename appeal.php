   <?php include_once('blocks/head.php');?>

    <?php include_once('blocks/header.php');?>
    <div class="container">
        <a href="index.php"> 
            <div class="back-to-index">
                <i class="fa-solid fa-arrow-left">
                </i> Назад
            </div>
        </a>
        <span class="forma-create-appel-info">В этом разделе вы можете оставить своё обращение, если возникли какие-либо вопросы по работе интернет-магазина Formula1. Или же вы можите создать заявку на возврат приобретённого в нашем магазине товара.</span>
        <div class=" btn-forma-create-appel" id="btn-create-appeal">Создать новое обращение</div>
        <div class=" btn-forma-create-appel" id="btn-create-zaivka">Создать заявку на возврат товара </div>
    </div>

    <div class="create-appel-forma" id="form-appel">
        <div class="close-form-appel" id="close-appel"><i class="fa-solid fa-xmark"></i></div>
        <form action="#">
            <h5>Создание обращения</h5>
            <span>Тема</span>
            <p>
                <select name="appel">
                    <option disabled>Выберите тему обращения</option>
                    <option value="t1">Оплата картой</option>
                    <option value="t2">Оплата наличными</option>
                    <option value="t3">Доставка</option>
                    <option value="t4">Возврат денег</option>
                    <option value="t5">Замечания</option>
                    <option value="t6">Работа сайта</option>
                    <option value="t7">Ассортимент</option>
                    <option value="t8">Другое</option>
                </select>
            </p>
            <span>Текст обращения</span>
            <p><textarea class="form-input-text" type="text"></textarea></p>
            <p><input class="form-input-btn" type="submit" class="btn"></p>
        </form>
    </div>
    <div class="create-appel-forma create-zaivka-forma" id="zaivka-forma">
        <div class="close-form-appel" id="close-zaivka"><i class="fa-solid fa-xmark"></i></div>
        <form action="#">
            <h5>Заявка на возврат</h5>
            <span>Номер заказа</span>
            <p><input class="input-number" type="text" ></p>
            <span>Причина возврата</span>
            <p>
                <select name="zaivka">
                    <option disabled>Выберите тему обращения</option>
                    <option value="t1">Брак</option>
                    <option value="t2">Другая</option>
                </select>
            </p>
            <span>Текст заявки</span>
            <p><textarea class="form-input-text" type="text"></textarea></p>
            <p><input class="form-input-btn " type="submit" ></p>
        </form>
    </div>
<script>
    var buttonzaivka = document.getElementById('btn-create-zaivka');
    var buttonappeal = document.getElementById('btn-create-appeal');
    var closeappel = document.getElementById('close-appel');
    var closezaivka = document.getElementById('close-zaivka');
    

    buttonappeal.onclick = function(e) {
        document.body.classList.add('after');
        document.getElementById("form-appel").style.display = "flex";

    }

    buttonzaivka.onclick = function(e) {
        document.body.classList.add('after');
        document.getElementById("zaivka-forma").style.display = "flex";

    }
    
   closeappel.onclick = function(e) {
        document.body.classList.remove('after');
        document.getElementById("form-appel").style.display = "none";

    }
    closezaivka.onclick = function(e) {
        document.body.classList.remove('after');
        document.getElementById("zaivka-forma").style.display = "none";

    }
</script>

    <?php include_once('blocks/footer.php');?>

