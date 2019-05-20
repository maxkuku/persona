<?error_reporting(1);


//print_r($_REQUEST);

/*if ($_COOKIE['orderhash'] == '') {*/
// print_r($_POST);
if (htmlspecialchars($_POST['log'],ENT_QUOTES) != ''
    && htmlspecialchars($_POST['pas'],ENT_QUOTES) != ''
    && htmlspecialchars($_POST['submit'],ENT_QUOTES) != '') {
	// echo "Got";
	$zapr = "SELECT * FROM users WHERE pass LIKE '".md5(htmlspecialchars($_POST['pas'],ENT_QUOTES))."'";
    $test_zapr =  "SELECT pass FROM users WHERE login LIKE '".htmlspecialchars($_POST['log'],ENT_QUOTES)."'";
    $res_name = mysql_fetch_row($test_zapr);
	// echo $zapr;

    $user_req = mysql_query($zapr);
	$recs = mysql_num_rows($user_req);
    $line = mysql_fetch_assoc($user_req);
    //print_r($line);
	if ($recs<1) {
        //echo mysql_error() . __LINE__ . "<br>";
        echo "<script>alert('Не правильный пароль. ".md5(htmlspecialchars($_POST['pas'],ENT_QUOTES))."');location.href='/log.php';</script>";
        exit();
    }else{
		$groups = array(1,2,3);
		if ($line['login'] == htmlspecialchars($_POST['log'],ENT_QUOTES)
            && in_array($line['group'],$groups)) {
			// user allowed
			$val = md5(htmlspecialchars($_POST['log'],ENT_QUOTES));
			// echo "UPDATE users SET hashh = '".$val."' AND last_login = '".date('Y-m-d')."' WHERE login = '".htmlspecialchars($_POST['log'],ENT_QUOTES)."'";
			setcookie('orderhash', $val, time()+60*60*24*365, '/', "webmaster.cf");?>
            <?
			if (mysql_query("UPDATE users SET hashh = '".$val."', last_login = '".date('Y-m-d')."' WHERE login = '".htmlspecialchars($_POST['log'],ENT_QUOTES)."'")) {
				echo "<script>
                    location.href='/';
                    </script>";
			}
		} else {
			echo "<script>alert('Пользователь не подтвержден администратором.'); location.href='/log.php';</script>";
		}
	} /*else {
		echo "<script>alert('Нет такого пользователя.'); location.href='/log.php';</script>";
	}*/
	
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход :: Договоры и контрагенты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="//yandex.st/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.mask.js" type="text/javascript"></script>
    <script type="text/javascript" src="func.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!--<script src="config.json"></script>-->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    
  </head>


<body>


<div class="centered">
<h1>Логин в базу</h1>
<form method="post" role="form" action="log.php">


<div class="form-group">
    <label for="log">Логин</label>
    <input type="text" class="form-control" id="log" name="log" placeholder="Логин">
</div>
<div class="form-group">
    <label for="pas">Пароль</label>
    <input type="password" class="form-control" id="pas" name="pas" placeholder="Пароль">
</div>

<div class="form-group">
    <label for="submit">&nbsp;</label>
    <input type="submit" name="submit" class="form-control btn-primary" id="submit" value="Войти" >
</div>

<a href="reg.php">Регистрироваться</a>&nbsp;&nbsp;&nbsp;<a href="/clear.php?c=Y">Сбросить</a>



</form>
</div>
<?
/*} else {
    $auth_req = mysql_query("SELECT * FROM users WHERE hashh = '".$_COOKIE['orderhash']."'");
    $user_name_req = mysql_fetch_assoc($auth_req);
    //  print_r($user_name_req);
    $name = $user_name_req['name'];

    if ($name != '') {
        echo "<script>alert('Вы уже авторизованы, " . $name . "'); location.href='/';</script>";
        exit();
    } else {
        echo "<script>location.href='/clear.php?c=Y';</script>";
    }

}*/// else if hash
?>

</body>
</html>

