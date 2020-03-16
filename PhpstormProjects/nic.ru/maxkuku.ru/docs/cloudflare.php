<meta charset="utf-8"/>
<title>HTTPS с помощью cloudflare.com</title>
<meta name="description" content="За выпуск https сертификата везде требуют денег. Допустим на рег.ру можно выпустить бесплатный Let's encrypt, но не все об этом знают. Вот способ бесплатного выпуска сертификата."/>
<style>
    .question_txt .blk {
        margin-top: 30px;
    }

    .blk {
        margin: 3% 0 0;
        border: 0;
    }
    .c_text {
        text-align: center;
    }
    .question_txt {
        width: 1200px;
        box-shadow: 3px 3px 20px #eee;
        padding: 40px;
        margin: 120px auto;
    }
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .pb4 {
        padding-bottom: 40px;
    }
    .new_css .question_body {
        background: #FFF;
        border-radius: 4px;
        margin: 0 auto;
        width: 800px;
        padding: 50px 70px;
        position: relative;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13), 0 1px 3px rgba(0, 0, 0, 0.13);
    }
    .blk_step_prod .step_circle {
        float: left;
        text-align: center;
        width: 35px;
        border-radius: 5px;
        padding: 9px 0;
        font-size: 16px;
        line-height: 1;
        background: #61B2DA;
        color: #FFF;
        text-shadow: 1px 1px #5195B6;
        border: 1px solid #67BFE9;
        border-right: 1px solid #3890B8;
        border-bottom: 1px solid #08628B;
    }
</style>
<div class=WordSection1>
    <h1>HTTPS с помощью cloudflare.com</h1>

    <i>Оригинал статьи опубликован по ссылке <a href="https://lpmotor.ru/admin/support/view/id:101">https://lpmotor.ru/admin/support/view/id:101</a>, но доступен только после авторизации</i>

    <div class="question_txt" style="margin-top:35px">

        <h3>Подключение SSL-сертификата с помощью сервиса CloudFlare </h3>
        <div class="blk" id="blk-411">Если вы хотите использовать бесплатный SSL-сертификат, вы можете воспользоваться сервисом CloudFlare, но этот способ потребует больше времени на подключение и больше действий с вашей стороны. </div>
        <div class="blk blk_step_prod clearfix" id="blk-256">
            <div class="step_circle">1</div>
            <div class="step_info">
                <div class=" step_title">Регистрируем аккаунт cloudflare</div>                <div class="step_text">Зарегистрироваться можно на их главной странице <a href="https://www.cloudflare.com/" target="_blank">cloudflare.com</a> с помощью кнопки <b>SignUp</b> справа вверху.</div>
            </div>
        </div>
        <div class="blk blk_step_prod clearfix" id="blk-257">
            <div class="step_circle">2</div>
            <div class="step_info">
                <div class=" step_title">Добавляем свой сайт</div>
                <div class="step_text">После регистрации приступаем к добавлению нового сайта. Введите имя вашего домена в поле и нажмите <b>Add Site</b> (Добавить сайт).</div>
            </div>
        </div>
        <div class="blk c_text" id="blk-435">
            <a href="/images/cloudflare/3fbd6960a7d190a25e1fada6fb9f768d_max.png" target="_blank">
                <img class="wpframe" src="/images/cloudflare/3fbd6960a7d190a25e1fada6fb9f768d.png"></a>
        </div>
        <div class="blk" id="blk-412">Далее система предложит вам выбрать тарифный план. Вы можете выбрать бесплатный тариф <b>(FREE)</b> и продолжить по кнопке <b>Confirm plan</b> (Подтвердить тарифный план).<br>
            <br>При этом система может попросить вас подтвердить заказ, выдав вам окно предпросмотра, что вы выбрали такой-то тариф и кнопки Purchase (купить) и Cancel (отмена). Жмем Purchase, чтобы продолжить.</div>
        <div class="blk c_text" id="blk-436">
            <a href="/images/cloudflare/f374a79ba4d3ba1064134857fec34353_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/f374a79ba4d3ba1064134857fec34353.png"></a>
        </div>
        <div class="blk blk_step_prod clearfix" id="blk-258">
            <div class="step_circle">3</div>
            <div class="step_info">
                <div class=" step_title">Проверка ресурсных записей домена (dns)</div>                <div class="step_text">В следующем окне нас интересуют основные А записи, установленные на домене. <br>

                    <s>
                    <br>Если домен у вас изначально настроен на наши сервера - то у вас, скорее всего, будет все также как на скриншоте ниже. Если это так - то этот шаг пропускаем и переходим к следующему. <br>
                    <br>Если же домен у вас в данный момент делегирован на другой хостинг, и в этом окне у вас показывает другие IP адреса, то в этом пункте вам нужно прописать наш IP адрес для каждой записи A записи в списке. <br>
                    <br><center><b>актуальный ip нашего сервиса: 185.165.123.167</b></center>
                    </s>

                </div>
            </div>
        </div>
        <div class="blk c_text" id="blk-437">
            <a href="/images/cloudflare/f57ed85bd6634e51548296383df3ca3b_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/f57ed85bd6634e51548296383df3ca3b.png"></a>
        </div>
        <div class="blk" id="blk-413">Когда все А записи будут настроены на указанный выше IP адрес - нажмите Continue внизу, чтобы продолжить.</div>
        <div class="blk blk_step_prod clearfix" id="blk-260">
            <div class="step_circle">4</div>
            <div class="step_info">
                <div class=" step_title">Настройка NS домена</div>                <div class="step_text">Чтобы все получилось, важно, чтобы ваш домен был полностью настроен на сервера cloudflare - то есть, нужно делегировать домен на их сервера, о чем система вас, собственно, и попросит на следующем шаге.<br>
                    <br>Для этого необходимо сменить NS адреса вашего домена на сайте, где домен зарегистрирован. <i>(если домен куплен через наш сервис - напишите в службу поддержки и эту настройку сделают для вас наши специалисты)</i><br>
                    <br>О том, как сменить NS записи домена подробнее описано в <a href="https:/lpmotor.ru/admin/support/view/id:54" target="_blank">инструкции здесь</a>, с той только разницей, что вместо наших NS адресов, вам нужно будет проставить NS сервера cloudflare <b>(на скриншоте ниже отмечены красным)</b></div>
            </div>
        </div>
        <div class="blk c_text" id="blk-439">
            <a href="/images/cloudflare/4a2a756bdfc111940fa7088c56813fa3_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/4a2a756bdfc111940fa7088c56813fa3.png"></a>
        </div>
        <div class="blk" id="blk-414"><b><i>ПРИМЕЧАНИЕ: на скриншоте показан ПРИМЕР таких записей, у вас записи должны быть другие, которые вам выдаст cloudflare.</i></b>
            <br>
            <br>Сменив NS записи на регистраторе, вернитесь к настройке cloudflare и нажмите Continue, чтобы продолжить.</div>
        <div class="blk blk_step_prod clearfix" id="blk-261">
            <div class="step_circle">5</div>
            <div class="step_info">
                <div class=" step_title">Проверьте, что все корректно настроилось</div>                <div class="step_text">После изменения DNS возможно потребуется время, от нескольких часов до 1-2 суток, пока данные о новых настройках обновятся в Интернете. <br>
                    <br>На следующем экране вам нужно каждые несколько часов кликать кнопку "Re-check Now", пока система не выдаст уведомление в зеленой полоске, что все нормально.<br>
                    <br>Так вы будете знать, что домен теперь настроен полностью на cloudflare и можно переходить далее.</div>
            </div>
        </div>
        <div class="blk c_text" id="blk-440">
            <a href="/images/cloudflare/f7d6596f6f1ed65a56de7037baeccc14_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/f7d6596f6f1ed65a56de7037baeccc14.png"></a>
        </div>
        <div class="blk blk_step_prod clearfix" id="blk-262">
            <div class="step_circle">6</div>
            <div class="step_info">
                <div class=" step_title">Настройка DNS proxy</div>                <div class="step_text">Когда домен успешно настроился на сервера cloudflare - откройте вкладку DNS в меню вверху. <br>
                    <br>В открывшемся редакторе dns записей убедитесь, что иконки в виде облачка справа от А записей цветные (оранжевые) - если нет (полностью серые), кликните по этим иконкам для изменения. <br>
                    <br>Это важно сделать, чтобы все запросы на ваш домен хоть и вели на наш сервис, но проходили через прокси сервера cloudflare.</div>
            </div>
        </div>
        <div class="blk c_text" id="blk-441">
            <a href="/images/cloudflare/b145a80cc482aa4b638ef33abf50fdef_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/b145a80cc482aa4b638ef33abf50fdef.png"></a>
        </div>
        <div class="blk blk_step_prod clearfix" id="blk-263">
            <div class="step_circle">7</div>
            <div class="step_info">
                <div class=" step_title">Настройка шифрования</div>                <div class="step_text">Переходим в раздел CRYPTO в меню сверху. <br>
                    <br>В плитке с информацией об SSL, в выпадающем меню в правой части, по-умолчанию будет стоять вариант Full или Off - выберите вариант Flexible.
                    <br></div>
            </div>
        </div>
        <div class="blk c_text" id="blk-442">
            <a href="/images/cloudflare/10f55f287792bc2007c61534472db9fe_max.png" target="_blank"><img class="wpframe" src="/images/cloudflare/10f55f287792bc2007c61534472db9fe.png"></a>
        </div>
        <div class="blk blk_step_prod clearfix" id="blk-264">
            <div class="step_circle">8</div>
            <div class="step_info">
                <div class=" step_title">Установка переадресации с http на https</div>                <div class="step_text">- Во вкладе Crypto спускаемся ниже и находим пункт <b>Always Use HTTPS</b>. <br>- Нажимаем на переключатель, чтобы он стал <b>On</b>, как на скриншоте ниже. <br></div>
            </div>
        </div>
        <div class="blk c_text" id="blk-443">
            <a href="/images/cloudflare/4e9fe0fd7dedf06d1376ed3cfc65eee4_max.jpg" target="_blank"><img class="wpframe" src="/images/cloudflare/4e9fe0fd7dedf06d1376ed3cfc65eee4.jpg"></a>
        </div>
        <div class="blk" id="blk-416"><b>Готово!</b><br>
            <br>После произведенных настроек в течение суток обновятся настройки SSL и домен/страницы будут работать на https:// протоколе с надежным сертификатом безопасности от cloudflare.<br></div>
        <div class="blk blk_step_prod clearfix" id="blk-444">
            <div class="step_circle">9</div>
            <div class="step_info">
                <div class=" step_title">Часто задаваемые вопросы по сервису CloudFlare</div>                <div class="step_text"></div>
            </div>
        </div>
        <div class="blk" id="blk-784"><b>1) А если мне нужны поддомены?</b><br>
            <br>В случае с cloudflare под каждый поддомен вам нужно будет создавать отдельную А запись с нашим ip адресом.
            <br>Сделать это вы можете в разделе <b>DNS</b> на Cloudflare.
            <br>В поле <b>Name</b> указываете имя поддомена (без доменного имени), а в поле <b>IPv4 address </b> наш IP - <b>185.165.123.167</b>
            <br>
            <br>В итоге в списке будет основная А запись домена с нашим уже ip (если выше по инструкции всё верно настроили), и дополнительные записи, включая ваш прописанный поддомен.<br></div>
        <div class="blk c_text" id="blk-892">
            <a href="/images/cloudflare//80d3a6d1a8607c3577e0ee68d7a58b7c_max.jpg" target="_blank"><img class="wpframe" src="/images/cloudflare//80d3a6d1a8607c3577e0ee68d7a58b7c.jpg"></a>
        </div>
        <div class="blk" id="blk-782"><b>2) У меня на сайте показывает уведомление "Сайт загружает небезопасные скрипты", и https работает некорректно из-за этого.</b><br>
            <br>Это значит, что сам домен настроился, но в коде сайта еще присутствуют ссылки, содержащие http протокол. <br>
            <br>В этом случае нужно сбросить кэш сайта. Сделать это можно так: зайдите в Настройки сайта - раздел Общие и нажмите Сохранить у любого пункта. Обычно этого достаточно, чтобы все обновилось.
            <br>
            <br>Если не помогло: стоит проверить вставленный сторонний код, любой HTML, что вы добавляли на сайт. Если в них есть http:// в ссылках - это действительно можно считать небезопасным источником в данном случае, и вопрос с тем, чтобы эти ссылки прописывались также на https вам понадобится уже с разработчиками этого кода. <br></div>
        <div class="blk" id="blk-783"><b>3) Домен обязательно должен быть сначала настроен на вас, прежде чем настраивать его на cloudflare?</b><br>
            <br>Не обязательно, но этот вариант удобнее. Так все DNS записи с нашего хостинга продублируются на cloudflare, и дополнительно их настраивать не нужно будет. </div>
    </div>


</div>