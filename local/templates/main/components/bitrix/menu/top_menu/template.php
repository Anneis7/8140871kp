<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="tooplate_menu">
	<?if (!empty($arResult)):?>
	<ul>
		<?foreach($arResult as $key => $arItem):?>
			<?if($arItem['DEPTH_LEVEL'] != 1){
				continue;
			}
			?>
			<?if($arItem['DEPTH_LEVEL'] == 1):?>
				<li <?if($arItem["SELECTED"]):?>class="current"<?endif?>>
				<a href="<?=$arItem["LINK"];?>" class=""><?=$arItem["TEXT"];?></a>
			<ul>
			<?endif;?>
				<?foreach($arResult as $keyInner => $arItemInner):?>
				<?if($keyInner <= $key) {
					continue;
				}
				?>
					<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
						<li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
					<?endif;?>
				<?if($arItemInner['DEPTH_LEVEL'] != 2){
					break;
				}
				?>
				<?endforeach;?>
			<?if($arItem['DEPTH_LEVEL'] == 1):?>
				</ul>
				</li>
			<?endif;?>
		<?endforeach;?>
	</ul>
	<?endif;?>
</div> <!-- end of tooplate_menu -->