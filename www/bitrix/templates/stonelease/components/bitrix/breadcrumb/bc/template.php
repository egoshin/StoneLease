<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<ul>';

$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$href = $arResult[$index]["LINK"];

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
		$strReturn .= '<li><a href="'.$href.'" role="menuitem">'.$title.'</a></li>';
	}
	else {
		$strReturn .= '<li>'.$title.'</li>';
	}
}

$strReturn .= '</ul>';
return $strReturn;
