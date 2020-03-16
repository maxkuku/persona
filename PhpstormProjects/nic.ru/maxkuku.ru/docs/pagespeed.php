<meta charset="utf-8"/>
<title>Ускорение загрузки и оптимизация с помощью PageSpeed Insights</title>
<meta name="description" content="Роспись по мелочам, как ускорить сайт, используя Google Page Speed"/>
<div class=WordSection1>
	<h1>Ускорение загрузки и оптимизация с помощью <span lang=EN-US>Google <a
				href="https://developers.google.com/speed/pagespeed/insights/?hl=ru">PageSpeed Insights</a>
</span>и <a
			href="https://developers.google.com/web/updates/2017/04/devtools-release-notes#coverage"><span
				lang=EN-US>Sources Coverage</span></a></h1>

	<p>До начала работ была проведена некоторая подготовка к
		оптимизации, но ее оказалось явно недостаточно.</p>

	<p>На скриншоте (рис. 1) видны в процентах показатели для мобильной
		и десктоп версии.</p>

	<p><img border=0 width=624 height=308 id="Рисунок 1"
	        src="images/image001.jpg"></p>

	<p align=center style='text-align:center'><b>Рис. 1</b></p>

	<p>Список рекомендаций включал в себя сжатие изображений,
		стилей и скриптов, удаление блокирующих загрузку скриптов, включение сжатия и
		кэша браузера.</p>

	<p>Включение кэша и сжатия зависит от хостинг-провайдера и,
		возможно, в настройках есть такие опции, но сейчас — <b>быстро —</b> они недоступны.</p>

	<p>Удалить блокирующие скипты, это значит переписывать все <span
			lang=EN-US>javascript</span>-функции сайта с тем, чтобы их загрузка совершалась
		независимо от загрузки документа. В результате переписи возникнет много ошибок,
		так как трудно учесть все страницы, на каких используется конкретный скрипт или
		функция.</p>

	<p class=MsoListParagraphCxSpFirst>1.<span
			>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Мы
		можем выборочно загружать скрипты на страницы, на которых используются
		описываемые в скриптах элементы.</p>

	<p>2.<span
			>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Мы
		можем, внимательно наблюдая работоспособность сайта, постепенно переносить
		скрипты в футер шаблона или страницы.</p>

	<p>3.<span
			>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Мы
		можем технически сжать скрипты и стили, чтобы они занимали меньше места. Убрать
		пробелы и пустые строки.</p>

	<p>4.<span
			>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>С
		помощью нового компонента разработки <span lang=EN-US>Google</span><span
			lang=EN-US> </span><span lang=EN-US>Chrome</span> — <a
			href="https://developers.google.com/web/updates/2017/04/devtools-release-notes#coverage">Sources
			Coverage</a> вычленить невостребованные скрипты и стили.</p>

	<p>Используя <a
			href="https://developers.google.com/web/updates/2017/04/devtools-release-notes#coverage">Sources
			Coverage</a>, удобно выявить неиспользуемые стили и скрипты на странице, но
		стоит иметь ввиду, что, если функционал страницы требует действий пользователя
		— <span lang=EN-US>hover</span>, <span lang=EN-US>click</span>, <span
			lang=EN-US>scroll</span><span lang=EN-US> </span>и т.д. — и от этого зависят употребляемые
		стили и скрипты, то инструмент из проигнорирует (рис. 2).</p>

	<p><img border=0 width=623 height=476 id="Рисунок 2"
	        src="images/image002.jpg"></p>

	<p align=center style='text-align:center'><b>Рис. 2</b></p>

	<p>&nbsp;</p>

	<p>При помощи инструмента <span lang=EN-US>PageSpeed</span><span
			lang=EN-US> </span>можно не только проверить, но и скачать минимизированные
		скрипты и стили, скачать минимизированные изображения.</p>

	<p>В результате 4-х часов работы процент оптимизации страницы
		почти вдвое увеличился (рис. 3).</p>

	<p><img border=0 width=624 height=338 id="Рисунок 3"
	        src="images/image003.jpg"></p>

	<p align=center style='text-align:center'><b>Рис. 3</b></p>

</div>