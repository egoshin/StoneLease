<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
    <h1>О компании</h1>
    <div class='about-block'>
        <div class='col9'>
            <?if(CModule::IncludeModule("iblock")):?>
                <?
                $arOrder = Array("SORT"=>"ASC");
                $arSelect = Array("NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT");
                $arFilter = Array("IBLOCK_ID"=>3, "ACTIVE"=>"Y");
                $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
                $count = 0;
                while($ar_res = $res->GetNext()):
                    $count++;
                    if($count == 1) {?>
                        <div class='company-today'>
                            <h5><?=$ar_res['NAME']?></h5>
                            <?=$ar_res['PREVIEW_TEXT']?>
                        </div>
                    <?} else {
                        if($count == 2){?>
                            <div class='list-block'>
                                <ul>
                        <?}?>
                                <li>
                                <?if(!is_null($ar_res["PREVIEW_PICTURE"])) {
                                    $img = CFile::GetFileArray($ar_res["PREVIEW_PICTURE"]);?>
                                    <div class='left-list-block'>
                                        <img height='230' width='215' src='<?=$img["SRC"]?>'
                                             alt="<?=$img["DESCRIPTION"]?>">
                                    </div>
                                    <div class='right-list-block'>
                                <?}?>
                                        <h5><?=$ar_res['NAME']?></h5>
                                        <?=$ar_res['PREVIEW_TEXT']?>
                                <?if(!is_null($ar_res["PREVIEW_PICTURE"])) echo ' </div>';?>
                                </li>
                    <?}
                endwhile;
                if($count >= 2) {?>
                        </ul>
                    </div>
                <?}
            endif;?>
            <ul class='news-block'>
                <h3>Последние новости</h3>
                <li class='main-news'>
                    <img alt='Название новости' src='http://placekitten.com/g/95/95'>
                    <div class='news-text'>
                        <p class='news-date'>
                            13.11.2014
                        </p>
                        <p class='news-title'>
                            Равным образом укрепление и развитие структуры представляет
                        </p>
                        <p>
                            Идейные соображения высшего порядка, а также постоянный.
                        </p>
                        <p>
                            <a href='#'>Читать далее</a>
                        </p>
                    </div>
                </li>
                <li class='main-news'>
                    <img alt='Название новости' src='http://placekitten.com/g/95/95'>
                    <div class='news-text'>
                        <p class='news-date'>
                            13.11.2014
                        </p>
                        <p class='news-title'>
                            Равным образом укрепление и развитие структуры представляет
                        </p>
                        <p>
                            Идейные соображения высшего порядка, а также постоянный количественный рост и сфера.
                        </p>
                        <p>
                            <a href='#'>Читать далее</a>
                        </p>
                    </div>
                </li>
            </ul>
            <a class='button-red' href='#'>Читать все новости</a>
        </div>
        <aside role='complementary'>
            <div class='col3'>
                <div class='about-menu-block'>
                    <h5>Полезная информация</h5>
                    <ul>
                        <li>
                            <a href='#'>Что такое лизинг</a>
                        </li>
                        <li>
                            <a href='#'>Почему лизинг выгоден для юридических лиц</a>
                        </li>
                        <li>
                            <a href='#'>На что стоит обращать внимание при заклчении договора лизинга</a>
                        </li>
                        <li>
                            <a href='#'>Список документов для заключения договора лизинга</a>
                        </li>
                        <li>
                            <a href='#'>Почему лизинг выгоден для юридических лиц</a>
                        </li>
                        <li>
                            <a href='#'>На что стоит обращать внимание при заклчении договора лизинга</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>