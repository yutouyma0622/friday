<?php
/*
formからデータを受け取る
auther: yuto383167a@icloud.com
date:2021.05.26
var.0
*/
foreach($_POST as $key => $value){
    echo $key.'>>'.$value."<br>\n";
}