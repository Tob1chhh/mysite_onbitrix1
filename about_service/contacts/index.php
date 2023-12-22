<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><br><h1>Контактная информация.</h1><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>