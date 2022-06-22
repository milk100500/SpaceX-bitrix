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
<div class="news-detail">
	<div style="clear:both"></div>
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<b><?=$arProperty["NAME"]?>:&nbsp;</b>
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<a class="page_contacts-links" href="#"><?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?></a>
		<?else:?>
			<?if($arProperty["NAME"] == 'Email'):?>
				<a class="page_contacts-links" href="mailto:<?=$arProperty["DISPLAY_VALUE"];?>"><?=$arProperty["DISPLAY_VALUE"];?></a>
			<?elseif ($arProperty["NAME"] == 'Телефон'):?>
				<a class="page_contacts-links" href="tel:<?=preg_replace('/['.'() '.']/', '', $arProperty["DISPLAY_VALUE"]);?>"><?=$arProperty["DISPLAY_VALUE"];?></a>
			<?else:?>
				<a class="page_contacts-links" href="javascript:void(0)"><?=$arProperty["DISPLAY_VALUE"];?></a>
			<?endif;?>
		<?endif?>
		<br />
	<?endforeach;
	?>
</div>