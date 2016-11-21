<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="menu-wrapper">
	<div id="smoothmenu1" class="ddsmoothmenu">
		<?if (!empty($arResult)):?>
		<ul>
			<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
					<li <?if($arItem["SELECTED"]):?>class="current"<?endif?>>
						<a href="<?=$arItem["LINK"];?>" class="selected"><?=$arItem["TEXT"];?></a></li>
				<?endif;?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
					</ul>
					</li>
				<?endif;?>
			<?endforeach;?>
		</ul>
		<?endif;?>
	</div>
</div>

