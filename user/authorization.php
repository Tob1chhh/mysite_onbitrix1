<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><div class="site-section">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-8 mb-5">
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form", 
	array(
		"COMPONENT_TEMPLATE" => "auth_form",
		"FORGOT_PASSWORD_URL" => "/user/forgot.php",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
</div>
</div>
</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>