<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

?>
<div class="container">
<?php
$APPLICATION->IncludeComponent("4A:system.auth.form", "4a", Array(
    "FORGOT_PASSWORD_URL" => "/auth/fpass.php",	// Страница забытого пароля
    "PROFILE_URL" => "/auth/lk.php",	// Страница профиля
    "REGISTER_URL" => "/auth/reg.php",	// Страница регистрации
    "SHOW_ERRORS" => "Y",	// Показывать ошибки
),
    false
);
?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
