<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html>
	<head>
        <?
        if($section_php = $APPLICATION->GetFileRecursive(".section.php")) {
            @include($_SERVER['DOCUMENT_ROOT'].$section_php);
            $title = $sSectionName;
        }
        $APPLICATION->SetTitle('StoneLease: '.$title);
        ?>
        <title><?$APPLICATION->ShowTitle($title);?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0>
        <?
        $APPLICATION->ShowHead();
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/styles.css');
        ?>
        <title><?$APPLICATION->ShowTitle();?></title>
        <meta content='width=device-width' name='viewport', initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
        <!--[if lt IE 9]>
            <script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
        <![endif]-->
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/min/js.min.js');?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="corper">
            <div class="without-footer">
                <div class='bg-header-ears'></div>
                <header role='banner'>
                    <div class='bg-header-ears-picture'></div>
                    <div class='inner-header'>
                        <?if(CModule::IncludeModule("iblock")):?>
                            <?
                            $arSelect = Array("NAME", "PREVIEW_PICTURE", "PROPERTY_telephone", "PROPERTY_telephone2",
                                "PROPERTY_code1", "PROPERTY_code2", "PROPERTY_work_from", "PROPERTY_work_to",
                                "PROPERTY_address", "PROPERTY_email", "PROPERTY_url_leasing");
                            $arFilter = Array("IBLOCK_ID"=>1, "ACTIVE"=>"Y");
                            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                            if($ar_res = $res->GetNext()) {
                                $logotype = CFile::GetFileArray($ar_res["PREVIEW_PICTURE"]);
                                $emailCompany = $ar_res['PROPERTY_EMAIL_VALUE'];?>
                                <div class='logotype'>
                                    <a href='<?=SITE_DIR?>'>
                                        <img src="<?=$logotype["SRC"]?>" alt="<?=$logotype["DESCRIPTION"]?>">
                                    </a>
                                </div>
                                <div class='address'>
                                    <?=$ar_res['PROPERTY_ADDRESS_VALUE']?><br>
                                    График работы: с <?=$ar_res['PROPERTY_WORK_FROM_VALUE']?> - <?=$ar_res['PROPERTY_WORK_TO_VALUE']?><br>
                                    <span>e-mail:</span>
                                    <a href='mailto:<?=$ar_res['PROPERTY_EMAIL_VALUE']?>'><?=$ar_res['PROPERTY_EMAIL_VALUE']?></a>
                                </div>
                                <div class='header-block1'>
                                    <div>
                                        <span>+7 (<?=$ar_res['PROPERTY_CODE1_VALUE']?>)</span> <?=$ar_res['PROPERTY_TELEPHONE_VALUE']?>
                                    </div>
                                    <a data-target='#writemeModal' data-toggle='modal' href='#'><?=GetMessage("HEADER_HREF_ASK")?></a>
                                </div>
                                <div class='header-block2'>
                                    <div>
                                        <span>+7 (<?=$ar_res['PROPERTY_CODE2_VALUE']?>)</span> <?=$ar_res['PROPERTY_TELEPHONE2_VALUE']?>
                                    </div>
                                    <a href='<?=$ar_res['PROPERTY_URL_LEASING_VALUE']?>'><?=GetMessage("HEADER_HREF_LEASING")?></a>
                                </div>
                        <?
                            }
                        endif;
                        ?>
                    </div>
                </header>
                <div class='bg-mainmenu-ears'></div>
                <nav class='mainmenu' role='navigation'>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1", Array(
                        "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    ),
                        false
                    );?>
                </nav>
                <nav class='breadcrumbs'>
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bc", Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    ),
                        false
                    );?>
                    <div class='redline'></div>
                </nav>
                <div role="main">