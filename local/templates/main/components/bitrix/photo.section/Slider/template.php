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

<div id="content">
		<script>
			$('.slider1').mobilyslider();
		</script>
			<div class="slider slider1">
				<div class="sliderContent">
					<?foreach ($arResult["ROWS"] as $rowNum => $row):?>
						<?foreach ($row as $columnNum => $item):?>
							<?if(!isset($item) || empty($item)) continue;?>
								<div class="item">
									<li><a href="<?=$item["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></a></li>
								</div>
						<?endforeach;?>
					<?endforeach;?>
				</div>
			</div>
</div>

