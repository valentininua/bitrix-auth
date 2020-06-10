<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

?>
<div class="container">
<?php
$APPLICATION->IncludeComponent(
    "4A:system.auth.forgotpasswd",
    "flat",
    Array(
        "AUTH" => "Y",
        "COMPONENT_TEMPLATE" => "flat",
        "REQUIRED_FIELDS" => array(0 => "EMAIL",),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(0 => "EMAIL",),
        "SUCCESS_PAGE" => "",
        "USER_PROPERTY" => "",
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);
?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>


