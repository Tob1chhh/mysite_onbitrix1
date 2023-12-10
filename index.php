<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная");
$APPLICATION->SetPageProperty("keywords", "биржа недвижимости");
$APPLICATION->SetPageProperty("description", "Биржа недвижимости - сайт, предназначенный для размещения объявлений о продаже недвижимости. На данном сайте предоставлен сервис, помогающий произвести покупку недвижимости, а также ее продажу.");
$APPLICATION->SetTitle("Биржа недвижимости");
?><p>
	Биржа недвижимости - сайт, предназначенный для размещения объявлений о продаже недвижимости. На данном сайте предоставлен сервис, помогающий произвести покупку недвижимости, а также ее продажу.
</p>
<p>
	Наш сайт работает на "1С-Битрикс". С хххх года мы предоставляем свои услуги для проведения купли-продажи недвижимости нашим пользователям, как продавцам, так и покупателям.
</p>
<h3>Наша продукция</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "section",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products"
	)
);?>
<h3>Наши услуги</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "products"
	)
);?>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>