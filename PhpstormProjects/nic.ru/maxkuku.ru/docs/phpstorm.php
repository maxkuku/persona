<meta charset="utf-8"/>
<title>Создать проект в PHPStorm</title>
<meta name="description" content="Очень хорошая программа PHPStorm. Там очень много всего полезного. Но кто в первый раз попробует создать проект для работы, столкнется с проблемой: куда ткнуть, чтоб работало"/>
<link src="/css/style.css">

<a href="index.php">Главная</a>&nbsp;
<a href="articles.php">Статьи</a>

<div class="question_txt">
    <h1>Создать проект в PHPStorm (любой современной версии)</h1>
    <p>У кого как, а у меня, например, PhpStorm (пи-эйч-пи-шторм, пэ-ха-пэ-шторм) portable версия 2016.3.4.</p>
    <p>По умолчанию открывается окошко с проектами. Но если их нет, то там пункт Создать &mdash; Create New Project.</p>
    <img src="/images/phpstorm/s1.JPG" alt="пункт Создать Create New Project"/>
    <p><strong>Рис. 1</strong></p>
    <p>Указать путь проекта. Последняя папка без / и будет папкой проекта. Поэтому, назвать ее лучше так, чтоб потом
        было понятно, где что лежит.</p>
    <img src="/images/phpstorm/s2.JPG" alt="Можно выставить версию php"/>
    <p><strong>Рис. 2</strong></p>
    <p>Можно выставить версию php.</p>
    <p>Создание проекта</p>
    <p>По кнопке Create создается проект. Если папка проекта уже существует, то Шторм спросит, объединить ли новый
        проект со старыми файлами в папке проекта.</p>
    <img src="/images/phpstorm/s3.JPG" alt="связать папку проекта на локальной машине с ftp папкой"/>
    <p><strong>Рис. 3</strong></p>
    <p>Теперь нужно связать папку проекта на локальной машине с ftp папкой проекта.</p>
    <p>Для этого нужно знать</p>
    <ol>
        <li>адрес подключения ftp,</li>
        <li>логин,</li>
        <li>пароль.</li>
    </ol>
    <p>Для хостинга reg.ru адрес можно указать таким же, как и доменное имя проекта.</p>
    <p>Нажимаем Tools &ndash; Deployment &ndash; Configuration (рис. 4)</p>
    <img src="/images/phpstorm/s4.JPG" alt="Нажимаем Tools Deployment Configuration"/>
    <p><strong>Рис. 4</strong></p>
    <p>Нажимаем плюс слева вверху окна и вводим параметры ftp подключения (рис. 5):</p>
    <ul>
        <li>FTP host &mdash; вводим адрес ftp нашего проекта</li>
        <li>Root path ставим корень (/)</li>
        <li>Я ставлю галочку Save password, чтобы при каждом подключении не вводить снова</li>
    </ul>
    <p>Нажимаем кнопку <strong>Advanced options</strong></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <img src="/images/phpstorm/s5.JPG" alt="Нажимаем кнопку Advanced options"/>
    <p><strong>Рис. 5</strong></p>
    <p>В дополнительных опциях нужно проставить (рис. 6)</p>
    <ul>
        <li>Галочку Passive mode. Так работают все наши хостеры</li>
        <li>И кодировку по умолчанию UTF-8, так как чаще всего мы работаем в международной кодировке.</li>
    </ul>
    <img src="/images/phpstorm/s6.JPG" alt="И кодировку по умолчанию UTF-8"/>
    <p><strong>Рис. 6</strong></p>
    <p>Далее основное окно конфигурации, вкладка Mappings. Там указано какую папку проекта на сервере открывать по
        умолчанию. Там может быть большой, лишний и ненужный уровень вложенности (рис. 7).</p>
    <p>&nbsp;</p>
    <img src="/images/phpstorm/s7.JPG" alt="окно конфигурации, вкладка Mappings"/>
    <p><strong>Рис. 7</strong></p>
    <p>Ставим слэш (/) в поле Deployment path on server.</p>
    <p>В меню Tools &mdash; Deployment &mdash; Options иногда полезно отметить права Override default permitions,
        выставляемые по умолчанию для проектов на Битрикс (рис. 9).</p>
    <img src="/images/phpstorm/s8.JPG" alt="Override default permitions"/>
    <p><strong>Рис. 8</strong></p>
    <p><strong>&nbsp;</strong></p>
    <img src="/images/phpstorm/s9.JPG" alt="Tools Deployment Automatic upload"/>
    <p><strong>Рис. 9</strong></p>
    <p>Tools &mdash; Deployment &mdash; Automatic upload выбрать. Если проектов несколько, то выбрать к какому проекту
        автоматически загружать измененные локально файлы.</p>
    <img src="/images/phpstorm/s10.JPG" alt="Browse Remote Host"/>
    <p><strong>Рис. 10</strong></p>
    <p>И там же внизу (рис. 10) Browse Remote Host чтобы видеть дерево папок и файлов на сервере.</p>
    <p>Настроено.</p>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
    $(document).ready(function() {
        $('.simple-ajax-popup-align-top').magnificPopup({
            type: 'iframe',
            alignTop: true,
            overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });
        $('.simple-ajax-popup').magnificPopup({
            /*type: 'ajax'*/
            type: 'image'
        });
    });
</script>
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31791916 = new Ya.Metrika({
                    id:31791916,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31791916" style="position:absolute; left:-9999px;" alt="" /></div></noscript>