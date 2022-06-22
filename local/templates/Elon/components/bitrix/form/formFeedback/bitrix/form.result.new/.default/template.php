<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>

<?=$arResult["FORM_HEADER"]?>

<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
<div class="modal__form">
	<div class="modal__form-items">
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
	?><div class="modal__form-item">
				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
				<?endif;?>
				<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
					<?if ($arQuestion["CAPTION"] == "Email или Телефон"):?><?=$arResult["REQUIRED_SIGN"];?>
						<div id="user_contact" type="text" placeholder="Телефон/Email">
							<?=$arQuestion["HTML_CODE"]; ?>
						</div>
						<?endif;?>
					<?if ($arQuestion["CAPTION"] == "Ваше имя"):?><?=$arResult["REQUIRED_SIGN"];?>
						<div id="user_name" type="text" placeholder="Ваше имя">
							<?=$arQuestion["HTML_CODE"]; ?>
						</div>
						<?endif;?>
					<?if ($arQuestion["CAPTION"] == "Ваша фамилия"):?><?=$arResult["REQUIRED_SIGN"];?>
						<div id="user_surname" type="text" placeholder="Ваша фамилия">
							<?=$arQuestion["HTML_CODE"]; ?>
						</div>
						<?endif;?>
					<?if ($arQuestion["CAPTION"] == "Сообщение"):?><?=$arResult["REQUIRED_SIGN"];?>
						<div id="message" type="text" placeholder="Текст...">
							<?=$arQuestion["HTML_CODE"]; ?>
						</div>	
						<?endif;?>

		</div>
	<?
	} //endwhile
	?>
	</div>
	<div class="modal__form-buttons">
		<?=$arResult["FORM_FOOTER"]?>
		<input class="modal__button button-send" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
	</div>
</div>

<?=$arResult["FORM_FOOTER"]?>


<?
} //endif (isFormNote)
?>