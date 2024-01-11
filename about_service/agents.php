<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Агенты недвижимости");
$APPLICATION->SetPageProperty("keywords", "агенты");
$APPLICATION->SetPageProperty("description", "Страница для отображения агентов недвижимости");
$APPLICATION->SetTitle("Агенты недвижимости");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"AGENTS_COUNT" => "1",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"HLBLOCK_TNAME" => "re_agents",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>