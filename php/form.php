<?php
$pageWasRefreshed = isset($_SERVER["HTTP_CACHE_CONTROL"]) && $_SERVER["HTTP_CACHE_CONTROL"] === "max-age=0";

if($pageWasRefreshed ) {
    $_POST["submit"] = null;
    $_POST["name"] = "";
    $_POST["number"] = "";
}

if (isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["number"]) && $_POST["name"] !== "" && $_POST["number"]){
    $name = $_POST["name"];
    $number = $_POST["number"];
    mail(
        "rbru-metrika@yandex.ru",
        "test mail",
        "name: $name, number: $number"
    );
}
