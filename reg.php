<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

?>
<div class="container">
    <?$APPLICATION->IncludeComponent("4A:main.register", "4A", Array(
        "USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
        "SEF_MODE" => "Y",
        "SHOW_FIELDS" => array(	// Поля, которые показывать в форме
            0 => "EMAIL",
            1 => "NAME",
        ),
        "REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
            0 => "EMAIL",
            1 => "NAME",
        ),
        "AUTH" => "Y",	// Автоматически авторизовать пользователей
        "USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
        "SUCCESS_PAGE" => "/auth/lk.php",	// Страница окончания регистрации
        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
        "USER_PROPERTY" => "",	// Показывать доп. свойства
        "SEF_FOLDER" => "/",
        "COMPONENT_TEMPLATE" => ".default"
    ),
        false
    );?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
