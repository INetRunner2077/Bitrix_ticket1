<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма обратной свзязи");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "danil-drozdov@mail.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>