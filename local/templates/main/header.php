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
    <!--[if IE 7]>
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH. "/template_style.css");?>
    <![endif]-->
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
                <div id="menu-wrapper">
                    <div id="smoothmenu1" class="ddsmoothmenu">
                        <ul>
                            <li><a href="index.html" class="selected">Home</a></li>
                            <li><a href="_include/portfolio.html">Portfolio</a></li>
                            <li><a href="_include/services.html">Services</a></li>
                            <li><a href="_include/full-width.html">Others</a>
                                <ul>
                                    <li><a href="_include/full-width.html">Full Width Page</a></li>
                                    <li><a href="_include/buttons.html">Buttons</a></li>
                                </ul>
                            </li>
                            <li><a href="_include/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Menu -->
            </div>
            <!-- End Header -->
        </div>
    </div>
    <!-- End Header Wrapper -->
    <!-- Begin Slider -->
    <div id="piecemaker-container">
        <div id="piecemaker">
            <p>Put your alternative Non Flash content here.</p>
        </div>
    </div>
    <!-- End Slider -->