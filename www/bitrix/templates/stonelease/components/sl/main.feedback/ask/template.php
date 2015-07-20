<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if(strlen($arResult["OK_MESSAGE"]) > 0)
	{
		?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<?AddMessage2Log(print_r($arResult, true), "Выгрузка массива \$arResult");?>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" role='form'>
		<?=bitrix_sessid_post()?>
		<div class='section-input'>
			<div class='form-group'>
				<label for='user_name'><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) ||
						in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span>*</span><?endif?></label>
				<input id='user_name' name='user_name' type='text' value="<?=$arResult["AUTHOR_NAME"]?>">
				<label for='user_telephone'><?=GetMessage("MFT_TELEPHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) ||
						in_array("TELEPHONE", $arParams["REQUIRED_FIELDS"])):?><span>*</span><?endif?></label>
				<input id='user_telephone' type="text" name="user_telephone" value="<?=$arResult["AUTHOR_TELEPHONE"]?>">
				<label for='user_email'><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) ||
						in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span>*</span><?endif?></label>
				<input id='user_email' type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
			</div>
			<div class='form-group'>
				<label for='MESSAGE'><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) ||
						in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span>*</span><?endif?></label>
				<textarea  id='MESSAGE' name="MESSAGE" rows="10"><?=$arResult["MESSAGE"]?></textarea>
			</div>
		</div>
		<div class='section-submit'>
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input class='button-red' type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
			<div class='requre-field-message'>
				Поля, отмеченные <span>*</span>, обязательны для заполнения
			</div>
		</div>
	</form>