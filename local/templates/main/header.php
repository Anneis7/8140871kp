<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Template 2046 Blue Flame
        by www.tooplate.com
    -->
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/nivo-slider.css");?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.min.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.nivo.slider.js", true);?>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect:'random',
                slices:15,
                animSpeed:500,
                pauseTime:3000,
                startSlide:0, //Set starting Slide (0 index)
                directionNav:false,
                directionNavHide:false, //Only show on hover
                controlNav:false, //1,2,3...
                controlNavThumbs:false, //Use thumbnails for Control Nav
                pauseOnHover:true, //Stop animation while hovering
                manualAdvance:false, //Force manual transitions
                captionOpacity:0.8, //Universal caption opacity
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){} //Triggers after all slides have been shown
            });
        });
    </script>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div id="tooplate_body_wrapper">
    <div id="tooplate_wrapper">

        <div id="tooplate_header">
            <div id="site_title">
                <h1><a href="#">For Kids</a></h1>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

        </div> <!-- end of forever header -->
        <div id="tooplate_main_top"></div>
        <div id="tooplate_middle">
            <div id="slider">
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slideshow/01.JPG" alt="Slide 01" title="Phasellus aliquet viverra posuere." /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slideshow/02.JPG" alt="Slide 02" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." /></a>
                <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slideshow/03.JPG" alt="Slide 03" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." /></a>
            </div>
        </div> <!-- end of middle -->
    </div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

