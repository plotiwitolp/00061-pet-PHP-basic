<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('51 Форма обратной связи на языке PHP и отправка письма на почту'); ?>
<form action="./sendmail.php" method="POST">
    <select name="subject">
        <option disabled selected>Тема письма</option>
        <option value="1">Вопрос 1</option>
        <option value="2">Вопрос 2</option>
        <option value="3">Вопрос 3</option>
    </select><br><br>
    <input type="email" name="email" placeholder="Enter your email" maxlength="50" required><br><br>
    <!-- required - чтобы input был обязательный для заполнения -->
    <textarea name="message" placeholder="Enter message" maxlength="150" required></textarea><br><br>
    <img src="./capcha1.png"><br><br>
    <input type="number" name="capcha" placeholder="Enter capcha" maxlength="5" required><br><br>
    <input type="submit" value="Send">
</form>

<?php

?>
<?php require "./footer.php";
