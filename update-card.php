<?php include_once('blocks/head.php');?>

<?php include_once('blocks/header.php');?>
<div class="container">
    <a href="auth.php"> 
        <div class="back-to-index">
            <i class="fa-solid fa-arrow-left">
            </i> Назад
        </div>
    </a>

    <form class="form-add-card" action="profil.php">
        <div class="card card-1">
            <input type="text" id="number-card">
            <p id="number-card-p">Номер карты</p>
            
            <input type="text" id="date-card">
            <p id="date-card-p">Месяц</p>
            <p id="number-slash">/</p>
            <input type="text" id="year-card">
            <p id="year-card-p">Год</p>

        </div>
        <div class=" card card-2">
            <div class="card-2-magnitka"></div>
            <input type="text" id="cvv-card">
            <p id="cvv-card-p">CVC/CVV</p>
            <div class="form-input-btn btn-card" id="btn-update-card"> Привязать</div>
        </div>
        <div class="popup-answer" id="popup-answer">
            <p>Вы действительно хотите привязать новую карту?<br> Это действие удалит привязаную ранее карту.</p>
            <button class="btn-card-update" id="yes-btn-update-card">Да</button>
            <div class="btn-card-update" id="no-btn-update-card">Отмена</div>
        </div>
</form>

</div>
<script>
    var btnsend = document.getElementById('btn-update-card');
    var closepopupcard = document.getElementById('no-btn-update-card');
    

    btnsend.onclick = function(e) {
        document.body.classList.add('after');
        document.getElementById("popup-answer").style.display = "flex";
    }

   
   closepopupcard.onclick = function(e) {
        document.body.classList.remove('after');
        document.getElementById("popup-answer").style.display = "none";
    }
//     closezaivka.onclick = function(e) {
//         document.body.classList.remove('after');
//         document.getElementById("zaivka-forma").style.display = "none";

//     }
</script>
<?php include_once('blocks/footer.php');?>
