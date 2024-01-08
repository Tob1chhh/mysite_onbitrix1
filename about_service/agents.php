<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Агенты недвижимости");
$APPLICATION->SetPageProperty("keywords", "агенты");
$APPLICATION->SetPageProperty("description", "Страница для отображения агентов недвижимости");
$APPLICATION->SetTitle("Агенты недвижимости");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	".default",
	Array(
		"AGENTS_COUNT" => "3",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"HLBLOCK_TNAME" => "re_agents"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>