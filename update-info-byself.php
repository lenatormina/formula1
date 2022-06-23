<?php include_once('blocks/head.php');?>

<?php include_once('blocks/header.php');?>
<div class="container">
    <a href="auth.php"> 
        <div class="back-to-index">
            <i class="fa-solid fa-arrow-left">
            </i> Назад
        </div>
    </a>

    <div class="form-add-info-byself">
            <h5>Изменить данные профиля</h5>
            <form action="profil.php">
                <div class="">
                    <p>Имя</p>
                    <input type="text">
                </div>
                <div class="">
                    <p>email</p>
                    <input type="text">
                </div>
                <div class="">
                    <p>Адрес</p>
                    <textarea name="adres" id="adres"></textarea>
                </div>   
                <div class="">
                    <p>Дата рождения </p>
                    <input name="birthday" id="birthday" type="date"></input>
                </div>                
                
                <div>
                    <p class="p-radioblock">Пол</p>
                    <input type="radio" id="mail"  name="sex" value="mail" class="custom-radio">
                    <label for="mail">Муж</label>
                    <input type="radio" id="femail" name="sex" value="femail" class="custom-radio">
                    <label for="femail">Жен</label>
                </div>
                <button class="form-input-btn btn-reg"> Сохранить </button>
            </form>
    </div>




</div>

<?php include_once('blocks/footer.php');?>
