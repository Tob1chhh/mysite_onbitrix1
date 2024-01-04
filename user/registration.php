<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration", 
	"reg_form", 
	array(
		"AUTH" => "Y",
		"COMPONENT_TEMPLATE" => "reg_form",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"SUCCESS_PAGE" => "/",
		"USER_PROPERTY" => array(
			0 => "UF_TYPE_USER",
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	),
	false
);?>
			</div>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>