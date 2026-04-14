<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная - РСО");
?>

<?// ==================== ГЕРОЙ (СЛАЙДЕР) ==================== ?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "hero_slider", array(
  "IBLOCK_TYPE" => "content",
  "IBLOCK_ID" => "4",  // Инфоблок "Главный слайдер"
  "NEWS_COUNT" => "4",
  "SORT_BY1" => "SORT",
  "SORT_ORDER1" => "ASC",
  "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
  "PROPERTY_CODE" => array("SUBTITLE", "BUTTON_TEXT", "BUTTON_LINK", "PHOTO"),
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "3600",
), false);?>

<?// ==================== ПРЕИМУЩЕСТВА ==================== ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"advantages", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "advantages",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ICON",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

<?// ==================== НАПРАВЛЕНИЯ ОТРЯДОВ ==================== ?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"directions", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "8",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PAGE_URL",
			4 => "",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "directions",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ICON",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

<?// ==================== ИСТОРИИ БОЙЦОВ ==================== ?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "stories", array(
  "IBLOCK_TYPE" => "content",
  "IBLOCK_ID" => "8",  // Инфоблок "Истории"
  "NEWS_COUNT" => "10",
  "SORT_BY1" => "SORT",
  "SORT_ORDER1" => "ASC",
  "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
  "PROPERTY_CODE" => array("ROLE"),
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "3600",
), false);?>

<?// ==================== ПАРТНЁРЫ ==================== ?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "partners", array(
  "IBLOCK_TYPE" => "content",
  "IBLOCK_ID" => "9",  // Инфоблок "Партнёры"
  "NEWS_COUNT" => "20",
  "SORT_BY1" => "SORT",
  "SORT_ORDER1" => "ASC",
  "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE"),
  "PROPERTY_CODE" => array("LINK"),
  "CACHE_TYPE" => "A",
  "CACHE_TIME" => "3600",
), false);?>

<?// ==================== CTA КНОПКИ ==================== ?>
<section class="cta-section">
  <a href="/join/" class="btn-yellow">Хочу вступить</a>
  <a href="/cooperation/" class="btn-outline">Хочу с вами сотрудничать</a>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
