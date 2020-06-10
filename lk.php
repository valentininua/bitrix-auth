<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

?>
<div class="container">
<?php
$APPLICATION->IncludeComponent("4A:main.profile", "4A", Array(
	
	),
	false
);
?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
