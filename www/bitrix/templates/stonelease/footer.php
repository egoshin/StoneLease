<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
                    </div>
                    <div class="footer-reserved"></div>
                </div>
                <div class="site-footer">
                    <div class='bg-footer-ears'></div>
                    <footer role='contentinfo'>
                        <?if(CModule::IncludeModule("iblock")):
                            $arOrder = Array("PROPERTY_column"=>"ASC", "SORT"=>"ASC");
                            $arSelect = Array("NAME", "PROPERTY_column", "PROPERTY_href");
                            $arFilter = Array("IBLOCK_ID"=>2, "ACTIVE"=>"Y");
                            $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
                            $col = 1;
                            echo "<ul class='f-col1' role='menubar'>";
                            while($ar_res = $res->GetNext()):
                                if($col <> $ar_res["PROPERTY_COLUMN_VALUE"]) {
                                    $col = $ar_res["PROPERTY_COLUMN_VALUE"];
                                    echo "</ul><ul class='f-col".$ar_res["PROPERTY_COLUMN_VALUE"]."' role='menubar'>";
                                }
                                echo "<li><a href='".$ar_res["PROPERTY_HREF_VALUE"]."' role='menuitem'>".$ar_res["NAME"]."</a></li>";
                            endwhile;
                            echo "</ul>";
                            ?>
                        <?endif;?>
                    </footer>
                    <div class='bg-postfooter-ears'></div>
                    <div class='postfooter'>
                        <div class='pf-col1'>
                            &copy; 2008–<?=date('Y')?>&nbsp;<?=GetMessage("FOOTER_COPYRIGHT_TEXT")?>
                        </div>
                        <div class='pf-col2'>
                            <?=GetMessage("FOOTER_CREATOR_TEXT")?>
                            <a href='http://www.whim.ru' target='_blank'><?=GetMessage("FOOTER_CREATOR_HREF")?></a>
                        </div>
                    </div>
                </div>
                <?include_once "include/modal.php";?>
            </div>
        </div>
	</body>
</html>