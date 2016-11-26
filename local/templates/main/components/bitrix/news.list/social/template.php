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

<div id="socials">
	<ul>
		<?foreach($arResult["ITEMS"] as $item):?>
			<li><a href="<?=$item["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" width="16" height="17" alt="" /><?=$item["NAME"]?></a></li>
		<?endforeach;?>
	</ul>
</div>

