<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
$GLOBALS['arrFilter'] = Array('IBLOCK_ID' => 5, 'PROPERTY_CHECK_PRIORITY_VALUE' => 'Да');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

  <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css", true);

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css", true);
  ?>

</head>

<body>

  <?$APPLICATION->ShowPanel();?>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/contact_phone.php"
                )
              );?>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/contact_mail.php"
                )
              );?>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/social_nets.php"
              )
            );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/name_logo.php"
                )
              );?>
            </h1>
          </div>
          
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>

        </div>
      </div>
    </div>
  </div>

  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_list_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Объявления",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "SHORT_DESC",
			1 => "PRICE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news_list_slider"
	),
	false
);?>

  <div class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/py_5_1.php"
              )
            );?>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/py_5_2.php"
              )
            );?>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/py_5_3.php"
              )
            );?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2><?=GetMessage("NEW_PROPERTIES");?></h2>
          </div>
        </div>
      </div>
      <?$APPLICATION->IncludeComponent(
        "bitrix:news.line", 
        "ads_line", 
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "600",
          "CACHE_TYPE" => "A",
          "DETAIL_URL" => "",
          "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "PROPERTY_SHORT_DESC",
            2 => "PROPERTY_PRICE",
            3 => "PROPERTY_SQUARE",
            4 => "PROPERTY_COUNT_BATHROOMS",
            5 => "PROPERTY_PRESENCE_GARAGE",
            6 => "",
          ),
          "IBLOCKS" => array(
            0 => "5",
          ),
          "IBLOCK_TYPE" => "ads",
          "NEWS_COUNT" => "9",
          "SORT_BY1" => "ACTIVE_FROM",
          "SORT_BY2" => "SORT",
          "SORT_ORDER1" => "DESC",
          "SORT_ORDER2" => "ASC",
          "COMPONENT_TEMPLATE" => "ads_line"
        ),
        false
      );?>
	  </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center mb-5">
          <div class="site-section-title">
            <h2><?=GetMessage("OUR_SERVICES");?></h2>
          </div>
        </div>
      </div>

      <?$APPLICATION->IncludeComponent("bitrix:news.line", "services_line", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
          "CACHE_GROUPS" => "Y",	// Учитывать права доступа
          "CACHE_TIME" => "600",	// Время кеширования (сек.)
          "CACHE_TYPE" => "A",	// Тип кеширования
          "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
          "FIELD_CODE" => array(	// Поля
            0 => "PROPERTY_EXTRES_LINK",
            1 => "",
          ),
          "IBLOCKS" => array(	// Код информационного блока
            0 => "6",
          ),
          "IBLOCK_TYPE" => "services",	// Тип информационного блока
          "NEWS_COUNT" => "6",	// Количество новостей на странице
          "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
          "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
          "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
          "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        ),
        false
      );?>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <div class="site-section-title">
            <h2><?=GetMessage("OUR_BLOG");?></h2>
          </div>
        </div>
      </div>

      <?$APPLICATION->IncludeComponent("bitrix:news.line", "news_line", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
          "CACHE_GROUPS" => "Y",	// Учитывать права доступа
          "CACHE_TIME" => "600",	// Время кеширования (сек.)
          "CACHE_TYPE" => "A",	// Тип кеширования
          "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
          "FIELD_CODE" => array(	// Поля
            0 => "",
            1 => "",
            2 => "",
          ),
          "IBLOCKS" => array(	// Код информационного блока
            0 => "1",
          ),
          "IBLOCK_TYPE" => "news",	// Тип информационного блока
          "NEWS_COUNT" => "3",	// Количество новостей на странице
          "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
          "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
          "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
          "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
          "COMPONENT_TEMPLATE" => "news_line"
        ),
        false
      );?>

    </div>
  </div>