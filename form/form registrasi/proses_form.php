<?php
if (empty($_POST["nama_lengkap"]) || empty($_POST["username"]) || empty($_POST["password"])){
    echo "Data Tidak Lengkap";
}else{
    echo "Nama lengkap : ".$_POST["nama_lengkap"];
    echo "<br>username : ".$_POST["username"];
    $upah = md5(string : $_POST["password"]);
    echo "<br>password : ".$upah;
}
?>