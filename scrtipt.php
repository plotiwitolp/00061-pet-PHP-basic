<?php
echo $_FILES['filename']['size'];
?><br>
<?php
$size = 3;
if ($_FILES['filename']['size'] > $size * (1024 ** 2)) {
    exit("Слишком большой файл (больше $size МБ)");
}

if (move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__ . '\\temp\\' . $_FILES['filename']['name'])) {
    echo 'Исходное имя файла - ' . $_FILES['filename']['name'] . '<br>';
    echo 'Размер файла в Mбайтах - ' . round(($_FILES['filename']['size'] / (1024 ** 2)), 2) . '<br>';
    echo 'MIME тип файла - ' . $_FILES['filename']['type'] . '<br>';
    echo 'Временный файл, в котором сохранен загруженный файл - ' . $_FILES['filename']['tmp_name'] . '<br>';
    echo 'Файл успешно загружен';
} else {
    echo 'Ошибка загрузки файла';
}
