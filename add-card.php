<?php include_once('blocks/head.php');?>

<?php include_once('blocks/header.php');?>
<div class="container">
    <a href="auth.php"> 
        <div class="back-to-index">
            <i class="fa-solid fa-arrow-left">
            </i> Назад
        </div>
    </a>

    <form class="form-add-card" action="index.php">
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
            <button class="form-input-btn btn-card"> Привязать</button>
        </div>


</form>
</div>

<?php include_once('blocks/footer.php');?>
