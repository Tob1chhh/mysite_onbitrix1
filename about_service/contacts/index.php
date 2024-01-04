<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
			 <?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback", 
				"feedback_form", 
				array(
					"COMPONENT_TEMPLATE" => "feedback_form",
					"EMAIL_TO" => "info@domain.com",
					"EVENT_MESSAGE_ID" => array(
						0 => "7",
					),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(
						0 => "NAME",
						1 => "EMAIL",
						2 => "SUBJECT",
						3 => "MESSAGE",
					),
					"USE_CAPTCHA" => "Y"
				),
				false
			);?>
			</div>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>