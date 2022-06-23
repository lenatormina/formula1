<?php include_once('blocks/head.php');?>

<?php include_once('blocks/header.php');?>
<div class="container">
    <a href="index.php"> 
        <div class="back-to-index">
            <i class="fa-solid fa-arrow-left">
            </i> Назад
        </div>
    </a>
    <div class="form-auth">
        <form action="add-info-byself.php"> <!-- Бэк - укажи файл обработчик, если проверка прошла переходим в файл  add-info-byself.php через переадрисацию -->
           
            <h5>Войти или создать профиль</h5>
            <span>Контактный телефон</span>
            <div class="region">
                <span>
                    <select name="region">
                        <option disabled>Выберите код региона</option>
                        <option value="t1">+7</option>
                        <option value="t2">+380</option>
                        <option value="t3">+49</option>
                    </select>
                </span>
                <span>
                    <input type="text">
                </span>
            </div>
            <span class="block">
                <input type="checkbox"  value="yes">
                <span> Согласен с условием Правил пользования торговой площадкой и правилами возврата</span>
            </span>
            <p><input class="form-input-btn mt-4" type="submit" value="Войти"></p>
        </form>
    </div>

</div>
<?php include_once('blocks/footer.php');?>
