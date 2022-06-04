<?php
if (!file_exists('./maria')) {
    mkdir('./maria', 0700);
} else {
    echo 'файла уже существует';
}
$date= date('Y');
mkdir("./maria/$date",0700);