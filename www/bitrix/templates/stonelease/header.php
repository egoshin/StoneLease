<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
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
<!--        <meta name="viewport" content="width=device-width">-->
        <?
        $APPLICATION->ShowHead();
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/styles.css');
        ?>
        <title><?$APPLICATION->ShowTitle();?></title>
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
                        <div class='logotype'>
                            <a href='/'>
                                <img alt='Stone Lease' src='<?=SITE_TEMPLATE_PATH?>/img/logotype.png'>
                            </a>
                        </div>
                        <div class='address'>
                            г. Москва, на  Варшавсое шоссе 41<br>
                            График работы: с 9.00 - 21.00<br>
                            <span>e-mail:</span>
                            <a href='mailto:info@stonelease.ru'>info@stonelease.ru</a>
                        </div>
                        <div class='header-block1'>
                            <div>
                                <span>+7 (495)</span> 981-19-98
                            </div>
                            <a data-target='#writemeModal' data-toggle='modal' href='#'>Задать вопрос</a>
                        </div>
                        <div class='header-block2'>
                            <div>
                                <span>+7 (916)</span> 581-98-71
                            </div>
                            <a href='#'>Заявка на лизинг</a>
                        </div>
                    </div>
                </header>
                <div class='bg-mainmenu-ears'></div>
                <nav class='mainmenu' role='navigation'>
                        <ul role='menubar'>
                            <li>
                                <a href='#' role='menuitem'>О компании</a>
                            </li>
                            <li>
                                <a href='#' role='menuitem'>Оперативный лизинг</a>
                            </li>
                            <li>
                                <a href='#' role='menuitem'>Финансовый лизинг</a>
                            </li>
                            <li>
                                <a href='#' role='menuitem'>Спецпредложения</a>
                            </li>
                            <li>
                                <a href='#' role='menuitem'>Блог</a>
                            </li>
                            <li>
                                <a href='#' role='menuitem'>Контакты</a>
                            </li>
                        </ul>
                    </nav>
                <div role="main">