<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- 1 тип вывода социальных сетей -->

<div class="social">

	<ul>
		<?foreach($arResult["ITEMS"] as $item):?>
			<li><a href="<?=$item["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" width="26" height="27" alt="" class="vm"/><?=$item["NAME"]?></a></li>
		<?endforeach;?>
	</ul>
</div>

<!-- 2 тип вывода социальных сетей -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
		<a class="a2a_button_facebook"></a>
		<a class="a2a_button_twitter"></a>
		<a class="a2a_button_google_plus"></a>
		<a class="a2a_button_vk"></a>
		<a class="a2a_button_mail_ru"></a>
	</div>

