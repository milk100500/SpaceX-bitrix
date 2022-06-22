<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><div class="contacts_form-error"><?=$arResult["FORM_ERRORS_TEXT"];?></div><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>


<div class="page_contacts-form">

	<div class="contacts_form-inputs">
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
	?>
			<div class="contacts_form-item">
				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
				<?endif;?>
				<?if ($arQuestion["CAPTION"] == 'Имя' || $arQuestion["CAPTION"] == 'Телефон'):?>
					<h4 class="contacts_form-question"><?=$arQuestion["CAPTION"]?>*</h4>
				<?else:?>
					<h4 class="contacts_form-question"><?=$arQuestion["CAPTION"]?></h4>
				<?endif;?>
			</div>
        <?if ($arQuestion["CAPTION"] == 'Имя'):?>
			<div class="contacts_form-input" id="user_name_contact"><?=$arQuestion["HTML_CODE"]?></div>
        <?elseif ($arQuestion["CAPTION"] == 'Телефон'):?>
            <div class="contacts_form-input" id="user_phone_contact"><?=$arQuestion["HTML_CODE"]?></div>
        <?elseif ($arQuestion["CAPTION"] == 'Email'):?>
            <div class="contacts_form-input" id="user_email_contact"><?=$arQuestion["HTML_CODE"]?></div>
        <?elseif ($arQuestion["CAPTION"] == 'Сообщение'):?>
            <div class="contacts_form-input" id="user_message_contact"><?=$arQuestion["HTML_CODE"]?></div>
    <?endif;?>
	<?
	} //endwhile
	?>
	</div>
	<div class="contacts_form-buttons">
        <input class="contacts_form-button" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
	</div>
</div>

<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>