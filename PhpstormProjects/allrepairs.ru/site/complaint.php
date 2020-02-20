<?php
session_start();
$admin = 'rosprofstroy@mail.ru, bob111@list.ru';

if ( isset( $_POST['sendMail'] ) ) {
  $name  = substr( $_POST['name'], 0, 64 );
  $email   = substr( $_POST['email'], 0, 64 );
  $message = substr( $_POST['message'], 0, 250 );

  $error = '';
  if ( empty( $name ) ) $error = $error.'<li>Не заполнено поле "Ваше имя"</li>';
  if ( empty( $email ) ) $error = $error.'<li>Не заполнено поле "E-mail"</li>';
  if ( empty( $message ) ) $error = $error.'<li>Не заполнено поле "Сообщение"</li>';
  if ( !empty( $email ) and !preg_match( "#^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,6}$#i", $email ) )
    $error = $error.'<li>поле "E-mail" должно соответствовать формату somebody@somewhere.ru</li>';
  if ( !empty( $error ) ) {
    $_SESSION['sendMailForm']['error']   = '<p>При заполнении формы были допущены ошибки:</p><ul>'.$error.'</ul>';
    $_SESSION['sendMailForm']['name']    = $name;
    $_SESSION['sendMailForm']['email']   = $email;
    $_SESSION['sendMailForm']['message'] = $message;
    header( 'Location: '.$_SERVER['PHP_SELF'] );
    die();
  }

  $body = "АВТОР:\r\n".$name."\r\n\r\n";
  $body .= "E-MAIL:\r\n".$email."\r\n\r\n";
  $body .= "СООБЩЕНИЕ:\r\n".$message;
  $body = quoted_printable_encode( $body );

  $theme   = '=?windows-1251?B?'.base64_encode('Обратная связь').'?=';
  $headers = "From: ".$_SERVER['SERVER_NAME']." <".$email.">\r\n";
  $headers = $headers."Return-path: <".$email.">\r\n";
  $headers = $headers."Content-type: text/plain; charset=\"windows-1251\"\r\n";
  $headers = $headers."Content-Transfer-Encoding: quoted-printable\r\n\r\n";

  if ( mail($admin, $theme, $body, $headers) )
    $_SESSION['success'] = true;
  else
    $_SESSION['success'] = false;
  header( 'Location: '.$_SERVER['PHP_SELF'] );
  die();
}

function quoted_printable_encode ( $string ) {
   // rule #2, #3 (leaves space and tab characters in tact)
   $string = preg_replace_callback (
   '/[^\x21-\x3C\x3E-\x7E\x09\x20]/',
   'quoted_printable_encode_character',
   $string
   );
   $newline = "=\r\n"; // '=' + CRLF (rule #4)
   // make sure the splitting of lines does not interfere with escaped characters
   // (chunk_split fails here)
   $string = preg_replace ( '/(.{73}[^=]{0,3})/', '$1'.$newline, $string);
   return $string;
}

function quoted_printable_encode_character ( $matches ) {
   $character = $matches[0];
   return sprintf ( '=%02x', ord ( $character ) );
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Наши контакты. Группа компаний &quot;РОСПРОФСТРОЙ&quot;</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta http-equiv="content-language" content="ru" />
<meta name="keywords" content="ремонт офисов квартир строительство дизайн отделка строительная компания" />
<meta name="description" content="Наши контакты" />
<meta name="robots" content="all" />
<meta name="author" content="Группа компаний РОСПРОФСТРОЙ" />
<meta name="copyright" content="©copyright Группа компаний РОСПРОФСТРОЙ" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/all.js"></script>
<script src="http://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script language="javascript" src="all.js" type="text/javascript"></script>

<!--[if lte IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('.logo img, .ftr_logo img, .hdr_contacts img, .txt_block_top, .mini_img a, #footer, .ftr_txt, .content_bg_top, .content_bg_btm, #content, .main_wrapper');
</script>
<![endif]-->

<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery('.topmenu ul li.vipad').hover(
        function() {
			jQuery(this).find('.subnav').slideDown(90);
			jQuery(this).find('.subnavt').slideDown(90);
			jQuery(this).addClass('liact');
        },
        function() {
			jQuery(this).find('.subnav').slideUp(90);
			jQuery(this).find('.subnavt').slideUp(90);
			jQuery(this).removeClass('liact');
        }
    );

    jQuery('.spoileron').click(
	 function() {
			jQuery(this).parents('.spoiler').children(".spoilernone").slideDown(120);
			jQuery(this).parents('.spoiler').children(".spoileron").slideUp(0);
     		jQuery(this).parents('.spoiler').children(".spoilerof").slideDown(0);
        }
    );

    jQuery('.spoilerof').click(
	 function() {
			jQuery(this).parents('.spoiler').children(".spoilernone").slideUp(120);
     		jQuery(this).parents('.spoiler').children(".spoilerof").slideUp(0);
			jQuery(this).parents('.spoiler').children(".spoileron").slideDown(0);
        }
    );

   });
</script>


</head>
<body>
<div id="html">
<div id="all">
<div class="all_wrapper">
<div id="header">
<div class="hdr_contacts"><img src="images/hdr_contacts.png" alt="" /></div>
<div class="logo"><a href="http://www.allrepairs.ru"><img src="images/logo.png" alt="Группа компаний РОСПРОФСТРОЙ" /></a></div>
</div>

<div id="content">
<div class="content_bg_top">
<div class="main_wrapper">

<div class="right_block">
<div class="banner_right"><a href="strahovanie.html"><img src="images/banner.gif" alt="" /></a></div>

<div class="block_name">Дополнительные направления:</div>
<div class="right_menu">
<ul>
    <li><a href="rekonstrukciya.html">Реконструкция</a></li>
    <li><a href="system.html">Офисные перегородки</a></li>
    <li><a href="razbor.html">Демонтажные работы</a></li>
    <li><a href="lestnicy.html">Лестничные ограждения</a></li>
    <li><a href="conditioner.html">Кондиционирование и вентиляция</a></li>
    <li><a href="plastikovye-okna-dveri.html">Пластиковые окна и двери</a></li>
    <li><a href="dokumenty.html">Документы</a></li>
    <li><a href="prais-na-otdelochnye-raboty.html">Прайс на отделочные работы</a></li>
    <li class="last"><a href="press.html">Полезные статьи</a></li>
</ul>
</div>

<div class="block_name">Наши<br />контакты</div>
<div class="phones">Телефон:
<span class="red">+7 (495) 589-3325</span>
<span class="blue">+7 (495) 995-5965</span>
Факс:
<span class="red">+7 (495) 995-5965</span>
</div>
<div class="right_sep"></div>
<div class="email">E-mail: <span class="blue"><a href="mailto:rosprofstroy@mail.ru">rosprofstroy@mail.ru</a></span></div>
<div class="right_sep"></div>
<div class="other_contacts"><a href="contact.html">Подробнее о контактах</a></div>
</div>

<div class="main_block">
<div class="topmenu">
<ul>
	<li class="vipad"><a href="des.html"><span><span>Дизайн</span></span></a>
		<div class="subnavt"><div><div></div></div></div><div class="subnav"><div class="subnavbot">
		<ul>
			<li><a href="dizain-interyera.html">Дизайн интерьера</a></li>
		    <li><a href="dizain-ofisov.html">Дизайн офисов</a></li>
		    <li><a href="dizain-kvartir.html">Дизайн квартир</a></li>
		    <li><a href="dizain-domov.html">Дизайн домов</a></li>
		</ul>
		<div class="clear"></div></div></div>
	</li>

	<li class="vipad"><a href="remont.html"><span><span>Ремонт</span></span></a>
		<div class="subnavt"><div><div></div></div></div><div class="subnav"><div class="subnavbot">
		<ul>
			<li><a href="office.html">Ремонт офисов</a></li>
		    <li><a href="flat.html">Ремонт квартир</a></li>
		    <li><a href="od.html">Ремонт домов</a></li>
		    <li><a href="remont-kottedzhei.html">Ремонт коттеджей</a></li>
		    <li><a href="remont-pomeshenii.html">Ремонт помещений</a></li>
		    <li><a href="nolive.html">Ремонт нежилых помещений</a></li>
        <li><a href="remont-restoranov.html">Ремонт ресторанов</a></li>
		    <li><a href="or.html">Развлекательные заведения</a></li>
		</ul>

		<div class="clear"></div></div></div>
	</li>

  <li class="vipad"><a href="stroy.html"><span><span>Строительство</span></span></a>
		<div class="subnavt"><div><div></div></div></div><div class="subnav"><div class="subnavbot">
		<ul>
		    <li><a href="stroitelstvo-derevyannyh-domov.html">Строительство деревянных домов</a></li>
		    <li><a href="stroitelstvo-zagorodnyh-domov.html">Строительство загородных домов</a></li>
        <li><a href="stroitelstvo-bani.html">Строительство бань</a></li>
		</ul>

		<div class="clear"></div></div></div>
	</li>

  <li class="vipad"><a href="foto.html"><span><span>Фото</span></span></a>
		<div class="subnavt"><div><div></div></div></div><div class="subnav"><div class="subnavbot">
		<ul>
			<li><a href="portfolio.html">Фото выполненных работ</a></li>
		    <li><a href="gallery_in_work.html">Фото объектов в работе</a></li>
		</ul>

		<div class="clear"></div></div></div>
	</li>
	<li><a href="us.html"><span><span>Сотрудники</span></span></a></li>
	<li><a href="contact.html"><span><span>Контакты</span></span></a></li>
</ul>
</div>

<div class="breadcrumbs"><SCRIPT type="text/javascript">document.write(index_);</SCRIPT> <span>Наши контакты</span></div>

<div class="about_block">
	<div class="about_block_wrapp">
	<div class="about_block_top">
		Группа компаний "Роспрофстрой" рада предложить полный спектр ремонтно-строительных работ. Быстрый ремонт любой сложности: ремонт офисов и квартир, дизайн помещений, евроремонт и отделочные работы. Предоставляется гарантия на качество работ!
	</div>
	</div>
<div class="about_block_btm"></div>
</div>
<div class="txt_blocks">
<h1>Наши контакты</h1>
<div class="txt_block_top"></div>

<p><span class="blue">Группа компаний &quot;Роспрофстрой&quot;</span> рада предложить полный спектр ремонтно-строительных работ. Быстрый ремонт любой сложности: ремонт офисов и квартир, дизайн помещений, евроремонт и отделочные работы. Предоставляется гарантия на качество работ!</p>

<p>Телефон: +7 (495) 589-3325; +7 (495) 995-5965<br />
Факс: +7 (495) 995-5965</p>

<p>Мы работаем с 09:00 до 21:00, <span class="blue">без выходных</span><br />
E-mail: allrepairs@mail.ru</p>
<?php
if ( isset( $_SESSION['success'] ) ) {
  if ( $_SESSION['success'] )
    echo '<p>Письмо успешно отправлено</p>';
  else
    echo '<p>Ошибка при отправке письма</p>';
  unset( $_SESSION['success'] );
}
if ( isset( $_SESSION['sendMailForm'] ) ) {
  echo $_SESSION['sendMailForm']['error'];
  $name    = htmlspecialchars ( $_SESSION['sendMailForm']['name'] );
  $email   = htmlspecialchars ( $_SESSION['sendMailForm']['email'] );
  $message = htmlspecialchars ( $_SESSION['sendMailForm']['message'] );
  unset( $_SESSION['sendMailForm'] );
} else {
  $name    = '';
  $email   = '';
  $message = '';
}
?>

               <h1>Форма обратной связи</h1>
<div class="txt_block_top"></div>
<div class="contact_form">
<form action="complaint.php" method="post">
<div><input type="text" name="name" class="contact_input" value="Имя*:" onfocus="javascript: if(this.value == 'Имя*:') this.value = '';" onblur="javascript: if(this.value == '') { this.value = 'Имя*:';}" /></div>
<div><input type="text" name="email" class="contact_input" value="E-mail*:" onfocus="javascript: if(this.value == 'E-mail*:') this.value = '';" onblur="javascript: if(this.value == '') { this.value = 'E-mail*:';}" /></div>
<div class="txt">Ваше сообщение*:</div>
<div><textarea name="message" cols="10" rows="10"></textarea></div>
<div><input type="submit" value="Отправить" class="contact_btn" /></div>
<div class="txt">* поля, обязательные для заполнения</div>
</form>
</div>

</div>
<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div>
</div>
<div class="clear"><img src="images/spacer.gif" alt="" height="1" /></div>
</div>
</div>
</div>
<div class="content_bg_btm"></div>

<div id="footer">
<div class="ftr_logo"><a href="http://www.allrepairs.ru"><img src="images/ftr_logo.png" alt="" /></a></div>
<div class="ftr_txt">
<div class="counter">
<!--noindex-->
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t18.5;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
<!--/noindex-->
</div>
    &copy; Роспрофстрой 2007-2012. <a href="http://www.allrepairs.ru">Ремонт офисов и квартир, коттеджей</a><br /> Создание сайта - <a href="http://xn--80abhgboekesp4ac4a.su/">кибермаркетинг.su</a><br /><br />
    Телефон: (495) 589-3325, (495) 995-5965  |  Факс: (495) 995-5965  |  <a href="mailto:rosprofstroy@mail.ru">rosprofstroy@mail.ru</a>
</div>
</div>

</div>
</div>
</div>
</body>
</html>
