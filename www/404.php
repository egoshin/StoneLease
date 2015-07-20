<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.breadcrumbs').hide();
        });
    </script>
    <div class='error404-block'>
        <div class='text404'>
            Ошибка <span>404</span>
        </div>
        <p>Страница не найдена</p>
        <a class='button-red' href='<?=SITE_DIR?>'>На главную</a>
    </div>
    <div class='sitemap-block'>
        <?$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
                "LEVEL"	=>	"2",
                "COL_NUM"	=>	"3",
                "SHOW_DESCRIPTION"	=>	"Y",
                "SET_TITLE"	=>	"Y",
                "CACHE_TIME"	=>	"36000000"
            )
        );
        ?>
    </div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>