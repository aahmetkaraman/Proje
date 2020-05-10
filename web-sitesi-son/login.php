<?php 
$url="login.html";

function Yonlendir($url,$zaman=0)
{
        if($zaman!=0){
            header("Refresh:$zaman;url=$url");
        }
        else {
            header("Location:$url");
        }
}
$eposta= "g191210023@sakarya.edu.tr";
$sifre=123456;

if($_POST["email"]==$eposta and $_POST["password"]==$sifre){
    echo "Hoşgeldiniz G191210023. Yönlendiriliyorsunuz";
    Yonlendir("http://localhost/web-sitesi-son/index.html",3);
}
else{
    echo "Hatalı Giriş Yaptınız. Yönlendiriliyorsunuz";
    Yonlendir("http://localhost/web-sitesi-son/login.html",2);
}
?>