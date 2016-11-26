<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="footer-content">
	<div id="smoothmenu1" class="ddsmoothmenu">
		<?if (!empty($arResult)):?>
			<ul>
				<?foreach($arResult as $key => $arItem):?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>
						<li <?if($arItem["SELECTED"]):?>class="selected"<?endif?>>
							<a href="<?=$arItem["LINK"];?>" ><?=$arItem["TEXT"];?></a></li>
					<?endif;?>
				<?endforeach;?>

			</ul>
		<?endif;?>
	</div>
</div> <!-- end of tooplate_menu -->