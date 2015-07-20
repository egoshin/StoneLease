<div class='g-hidden'>
    <div class='box-modal' id='writemeModal'>
        <a class='box-modal_close arcticmodal-close' href='#'></a>
        <h2>Задать вопрос</h2>
        <?$APPLICATION->IncludeComponent(
            "sl:main.feedback",
            "ask",
            array(
                "COMPONENT_TEMPLATE" => "ask",
                "USE_CAPTCHA" => "N",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "EMAIL_TO" => "me@egoshin.net",
                "REQUIRED_FIELDS" => array(
                    0 => "NAME",
                    1 => "TELEPHONE",
                    2 => "EMAIL",
                    3 => "MESSAGE",
                ),
                "EVENT_MESSAGE_ID" => array(
                )
            ),
            false
        );?>
    </div>
</div>