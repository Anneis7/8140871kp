<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/style.css");?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH. "/template_styles.css");?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/style/js/jquery-1.5.min.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/style/js/ddsmoothmenu.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/style/js/scripts.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/scripts/swfobject/swfobject.js", true);?>
    <script type="text/javascript">
        var flashvars = {};
        flashvars.cssSource = "piecemaker.css";
        flashvars.xmlSource = "piecemaker.xml";
        var params = {};
        params.play = "true";
        params.menu = "false";
        params.scale = "showall";
        params.wmode = "transparent";
        params.allowfullscreen = "true";
        swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '450', '10', null, flashvars, params, null);
    </script>
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH. "/components/bitrix/photo.section/Slider/css/default.css");?>


    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/components/bitrix/photo.section/Slider/js/jquery.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/components/bitrix/photo.section/Slider/js//mobilyslider.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/components/bitrix/photo.section/Slider/js/init.js", true);?>

    <!-- must have -->
    <script>
        jQuery(function() {

            jQuery('#allinone_contentSlider_surprise').allinone_contentSlider({
                skin: 'surprise',
                width: 960,
                height: 384,
                autoHideBottomNav:false,
                showPreviewThumbs:false,
                autoHideNavArrows:false
            });


        });
    </script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div id="container">
    <!-- Begin Header Wrapper -->
    <div id="page-top">
        <div id="header-wrapper">
            <!-- Begin Header -->
            <div id="header">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                <div id="logo"><a href="index.html">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                            )
                        );?>
                    </a></div>
                    <?if(!CSite::InDir('/')):?></a><?endif;?>
                <!-- Logo -->
                <!-- Begin Menu -->
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "topmenu"
	),
	false
);?>
                <!-- End Menu -->
            </div>
            <!-- End Header -->
        </div>
    </div>
    <!-- End Header Wrapper -->
    <!-- Begin Slider -->
    <?$APPLICATION->IncludeComponent("bitrix:photo.section", "Slider", Array(
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"LINE_ELEMENT_COUNT" => "3",	// Количество фотографий, выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
	),
	false
);?>

    <!-- End Slider -->