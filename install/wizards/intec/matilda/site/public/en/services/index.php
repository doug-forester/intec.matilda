<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Услуги");

?>
<?php $APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"services.1",
	array(
		"IBLOCK_TYPE" => "#CATALOGS_SERVICES_IBLOCK_TYPE#",
		"IBLOCK_ID" => "#CATALOGS_SERVICES_IBLOCK_ID#",
		"MENU_TEMPLATE" => "1",
		"MENU_ROOT" => "left",
		"MENU_CHILD" => "left",
		"MENU_LEVEL" => "4",
		"MENU_IBLOCK_TYPE" => "#CATALOGS_SERVICES_IBLOCK_TYPE#",
		"MENU_IBLOCK_ID" => "#CATALOGS_SERVICES_IBLOCK_ID#",
		"MENU_PROPERTY_PICTURE" => "",
		"MENU_VIEW" => "simple.1",
		"SETTINGS_USE" => "Y",
		"SETTINGS_PROFILE" => "services",
		"LAZYLOAD_USE" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#services/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_ROOT_SECTION_DESCRIPTION_SHOW" => "N",
		"SECTIONS_ROOT_CANONICAL_URL_USE" => "N",
		"SECTIONS_ROOT_TEMPLATE" => "tile.2",
		"SECTIONS_ROOT_MENU_SHOW" => "N",
		"SECTIONS_ROOT_CONTENT_BEGIN_SHOW" => "N",
		"SECTIONS_ROOT_CONTENT_END_SHOW" => "N",
		"SECTIONS_ROOT_COLUMNS" => "3",
		"SECTIONS_ROOT_PICTURE_TYPE" => "square",
		"SECTIONS_ROOT_PICTURE_INDENTS" => "N",
		"SECTIONS_ROOT_NAME_POSITION" => "center",
		"SECTIONS_ROOT_DESCRIPTION_SHOW" => "Y",
		"SECTIONS_ROOT_DESCRIPTION_POSITION" => "center",
		"SECTIONS_CHILDREN_SECTION_DESCRIPTION_SHOW" => "N",
		"SECTIONS_CHILDREN_CANONICAL_URL_USE" => "N",
		"SECTIONS_CHILDREN_TEMPLATE" => "tile.2",
		"SECTIONS_CHILDREN_MENU_SHOW" => "N",
		"SECTIONS_CHILDREN_CONTENT_BEGIN_SHOW" => "N",
		"SECTIONS_CHILDREN_CONTENT_END_SHOW" => "N",
		"SECTIONS_CHILDREN_COLUMNS" => "3",
		"SECTIONS_CHILDREN_PICTURE_TYPE" => "square",
		"SECTIONS_CHILDREN_PICTURE_INDENTS" => "N",
		"SECTIONS_CHILDREN_NAME_POSITION" => "center",
		"SECTIONS_CHILDREN_DESCRIPTION_SHOW" => "Y",
		"SECTIONS_CHILDREN_DESCRIPTION_POSITION" => "center",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"LIST_ROOT_SHOW" => "N",
		"LIST_CHILDREN_TEMPLATE" => "tile.2",
		"LIST_CHILDREN_POSITION" => "top",
		"LIST_CHILDREN_COLUMNS" => "3",
		"LIST_CHILDREN_PICTURE_TYPE" => "square",
		"LIST_CHILDREN_PICTURE_INDENTS" => "N",
		"LIST_CHILDREN_NAME_POSITION" => "center",
		"LIST_CHILDREN_DESCRIPTION_SHOW" => "Y",
		"LIST_CHILDREN_DESCRIPTION_POSITION" => "center",
		"LIST_CHILDREN_LAZY_LOAD" => "N",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_TEMPLATE" => "default.3",
		"DETAIL_BLOCKS" => array(
			"banner",
			"description.1",
			"icons.1",
			"form.1",
			"gallery.1",
			"properties.1",
			"documents.1",
			"videos.1",
			"projects.1",
			"reviews.1",
			"services.1",
			"products.1"
		),
		"DETAIL_BLOCKS_ORDER" => "description.1,icons.1,form.1,gallery.1,properties.1,documents.1,videos.1,projects.1,reviews.1,services.1,products.1",
		"DETAIL_PROPERTY_PRICE" => "PRICE",
		"DETAIL_PROPERTY_CURRENCY" => "CURRENCY",
		"DETAIL_CURRENCY" => "руб.",
		"DETAIL_PROPERTY_PRICE_FORMAT" => "PRICE_FORMAT",
		"DETAIL_PRICE_FORMAT" => "#VALUE# #CURRENCY#",
		"DETAIL_DESCRIPTION_HEADER" => "Описание",
		"DETAIL_DESCRIPTION_PROPERTY_HEADER" => "DESCRIPTION_TITLE",
		"DETAIL_BLOCKS_BANNER_WIDE" => "Y",
		"DETAIL_BLOCKS_BANNER_HEIGHT" => "400px",
		"DETAIL_BLOCKS_BANNER_SPLIT" => "N",
		"DETAIL_BLOCKS_BANNER_PRICE_TITLE" => "Цена:",
		"DETAIL_BLOCKS_BANNER_TEXT_SHOW" => "Y",
		"DETAIL_BLOCKS_BANNER_PROPERTY_ORDER_BUTTON_SHOW" => "ORDER_BUTTON_SHOW",
		"DETAIL_BLOCKS_BANNER_ORDER_BUTTON_TEXT" => "Заказать услугу",
		"DETAIL_BLOCKS_BANNER_ORDER_FORM_ID" => "#FORMS_SERVICE_ID#",
		"DETAIL_BLOCKS_BANNER_ORDER_FORM_TEMPLATE" => ".default",
		"DETAIL_BLOCKS_BANNER_ORDER_FORM_SERVICE" => "#FORMS_SERVICE_FIELDS_SERVICE_ID#",
		"DETAIL_BLOCKS_BANNER_ORDER_FORM_CONSENT" => "#SITE_DIR#company/consent/",
		"DETAIL_BLOCKS_DESCRIPTION_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_ICONS_1_HEADER" => "",
		"DETAIL_BLOCKS_ICONS_1_PROPERTY_HEADER" => "ICONS_TITLE",
		"DETAIL_BLOCKS_ICONS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_ICONS_1_IBLOCK_TYPE" => "#CATALOGS_SERVICES_ICONS_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_ICONS_1_IBLOCK_ID" => "#CATALOGS_SERVICES_ICONS_IBLOCK_ID#",
		"DETAIL_BLOCKS_ICONS_1_PROPERTY_ELEMENTS" => "ICONS_ELEMENTS",
		"DETAIL_BLOCKS_ICONS_1_SORT_BY" => "SORT",
		"DETAIL_BLOCKS_ICONS_1_ORDER_BY" => "ASC",
		"DETAIL_BLOCKS_ICONS_1_PICTURE_SHOW" => "Y",
		"DETAIL_BLOCKS_ICONS_1_PREVIEW_SHOW" => "Y",
		"DETAIL_BLOCKS_ICONS_1_COLUMNS" => "3",
		"DETAIL_BLOCKS_ICONS_1_PICTURE_POSITION" => "top",
		"DETAIL_BLOCKS_ICONS_1_BACKGROUND_PATH" => "",
		"DETAIL_BLOCKS_FORM_1_WIDE" => "Y",
		"DETAIL_BLOCKS_FORM_1_FORM_ID" => "#FORMS_QUESTION_ID#",
		"DETAIL_BLOCKS_FORM_1_FORM_TEMPLATE" => ".default",
		"DETAIL_BLOCKS_FORM_1_TITLE" => "Нужна консультация?",
		"DETAIL_BLOCKS_FORM_1_DESCRIPTION" => "Подробно расскажем о наших услугах, видах работ и типовых проектах, рассчитаем стоимость и подготовим индивидуальное предложение!",
		"DETAIL_BLOCKS_FORM_1_BUTTON_TEXT" => "Задать вопрос",
		"DETAIL_BLOCKS_FORM_1_POPUP_TITLE" => "Задать вопрос",
		"DETAIL_BLOCKS_FORM_1_CONSENT_URL" => "#SITE_DIR#company/consent/",
		"DETAIL_BLOCKS_GALLERY_1_HEADER" => "Галерея",
		"DETAIL_BLOCKS_GALLERY_1_PROPERTY_HEADER" => "GALLERY_TITLE",
		"DETAIL_BLOCKS_GALLERY_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_GALLERY_1_IBLOCK_TYPE" => "#CATALOGS_SERVICES_GALLERY_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_GALLERY_1_IBLOCK_ID" => "#CATALOGS_SERVICES_GALLERY_IBLOCK_ID#",
		"DETAIL_BLOCKS_GALLERY_1_PROPERTY_ELEMENTS" => "GALLERY_ELEMENTS",
		"DETAIL_BLOCKS_PROPERTIES_1_HEADER" => "Характеристики",
		"DETAIL_BLOCKS_PROPERTIES_1_PROPERTY_HEADER" => "PROPERTIES_TITLE",
		"DETAIL_BLOCKS_PROPERTIES_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_DOCUMENTS_1_HEADER" => "Документы",
		"DETAIL_BLOCKS_DOCUMENTS_1_PROPERTY_HEADER" => "DOCUMENTS_TITLE",
		"DETAIL_BLOCKS_DOCUMENTS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_DOCUMENTS_1_PROPERTY_FILES" => "DOCUMENTS_FILES",
		"DETAIL_BLOCKS_VIDEOS_1_HEADER" => "Видеогалерея",
		"DETAIL_BLOCKS_VIDEOS_1_PROPERTY_HEADER" => "VIDEOS_TITLE",
		"DETAIL_BLOCKS_VIDEOS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_VIDEOS_1_IBLOCK_TYPE" => "#CONTENT_VIDEO_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_VIDEOS_1_IBLOCK_ID" => "#CONTENT_VIDEO_IBLOCK_ID#",
        "DETAIL_BLOCKS_VIDEOS_1_PROPERTY_LINK" => "LINK",
		"DETAIL_BLOCKS_VIDEOS_1_PROPERTY_ELEMENTS" => "VIDEOS_ELEMENTS",
		"DETAIL_BLOCKS_PROJECTS_1_HEADER" => "Проекты",
		"DETAIL_BLOCKS_PROJECTS_1_PROPERTY_HEADER" => "PROJECTS_TITLE",
		"DETAIL_BLOCKS_PROJECTS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_PROJECTS_1_IBLOCK_TYPE" => "#CONTENT_PROJECTS_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_PROJECTS_1_IBLOCK_ID" => "#CONTENT_PROJECTS_IBLOCK_ID#",
		"DETAIL_BLOCKS_PROJECTS_1_PROPERTY_ELEMENTS" => "PROJECTS_ELEMENTS",
		"DETAIL_BLOCKS_REVIEWS_1_HEADER" => "Отзывы",
		"DETAIL_BLOCKS_REVIEWS_1_PROPERTY_HEADER" => "REVIEWS_TITLE",
		"DETAIL_BLOCKS_REVIEWS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_REVIEWS_1_IBLOCK_TYPE" => "#CATALOGS_SERVICES_REVIEWS_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_REVIEWS_1_IBLOCK_ID" => "#CATALOGS_SERVICES_REVIEWS_IBLOCK_ID#",
		"DETAIL_BLOCKS_REVIEWS_1_PROPERTY_POSITION" => "POSITION",
		"DETAIL_BLOCKS_REVIEWS_1_PROPERTY_ELEMENTS" => "REVIEWS_ELEMENTS",
		"DETAIL_BLOCKS_SERVICES_1_HEADER" => "Сопутствующие услуги",
		"DETAIL_BLOCKS_SERVICES_1_PROPERTY_HEADER" => "SERVICES_TITLE",
		"DETAIL_BLOCKS_SERVICES_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_SERVICES_1_PROPERTY_ELEMENTS" => "SERVICES_ELEMENTS",
		"DETAIL_BLOCKS_PRODUCTS_1_HEADER" => "Сопутствующие товары",
		"DETAIL_BLOCKS_PRODUCTS_1_PROPERTY_HEADER" => "PRODUCTS_TITLE",
		"DETAIL_BLOCKS_PRODUCTS_1_HEADER_POSITION" => "left",
		"DETAIL_BLOCKS_PRODUCTS_1_PROPERTY_ELEMENTS" => "PRODUCTS_ELEMENTS",
		"DETAIL_BLOCKS_PRODUCTS_1_IBLOCK_TYPE" => "#CATALOGS_PRODUCTS_IBLOCK_TYPE#",
		"DETAIL_BLOCKS_PRODUCTS_1_IBLOCK_ID" => "#CATALOGS_PRODUCTS_IBLOCK_ID#",
		"DETAIL_BLOCKS_PRODUCTS_1_PRICE_CODE" => array(
			"BASE",
		),
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"FILE_404" => "#SITE_DIR#404.php",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_ID#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php") ?>
