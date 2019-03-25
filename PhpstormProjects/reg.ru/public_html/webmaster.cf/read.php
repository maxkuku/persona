<?error_reporting(0);?>

<?
  include('conn/conn.php');
  if ($_COOKIE['orderhash'] != '') {
	$auth_req = mysql_query("SELECT * FROM users WHERE hashh = '".$_COOKIE['orderhash']."'");
	$user_name_req = mysql_fetch_assoc($auth_req);
	 
	$name = $user_name_req['name'];
	echo "<div class='username'>" . $name . "<br><a href='/clear.php?c=Y'>Выход</a></div>"; 
	
		if ($name == "") {
			echo "<script>alert('Сессия истекла. Пройдите авторизацию.'); location.href='/log.php'</script>";
		}
	
	if ($name != '') {
		
		if ($user_name_req['group'] == 1 || $user_name_req['group'] == 2 || $user_name_req['group'] == 3) {
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Чтение :: Договоры и контрагенты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap-lightbox.min.css">
    <link rel="stylesheet" href="general.css" type="text/css">
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <script src="jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="jquery.mask.js" type="text/javascript"></script>
    <script type="text/javascript" src="func.js"></script>
    <script src="bootstrap.min.js"></script>
    
    
	
    <!--<script src="config.json"></script>-->
    
    
  </head>
 

<body>

<form method="get">

    <!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand bg-success" href="read.php">Чтение</a>
          <a class="navbar-brand" href="index.php">Добавить договор</a>
          <a class="navbar-brand" href="help.html">Справка</a>




        </div>
      </div>
    </div>



    <div class="hrefs"><? if(!$all_count_req = mysql_query("SELECT * FROM dogovor")){
            echo mysql_error() . __LINE__ . " f-" . __FILE__ . "<br>";
        }
        $all_count = mysql_num_rows($all_count_req);
        for ($i=0;$i<ceil(0.1*$all_count);$i++) {?>
	        <?$active = "";?>
	        <?$jj = $i*10; $zz = $i * 10 + 10;?>
	        <?if(htmlspecialchars($_REQUEST['limit']) == $jj . ',' . $zz){$active = "btn-info";}?>
            <a class="navbar-btn <?=$active?>" href="/read.php?limit=<?=$jj?>,<?=$zz?>"><?=$i + 1?></a>
        <?}?></div>
 
 
    <div class="container-fluid">





<?

include('conn/conn.php');



if (htmlspecialchars($_REQUEST['limit'],ENT_QUOTES) == '') {
    $limit = 10;
} else {
    $limit = htmlspecialchars($_REQUEST['limit'],ENT_QUOTES);
}

if (htmlspecialchars($_REQUEST['id'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE id = ".htmlspecialchars($_REQUEST['id']);
} else if (htmlspecialchars($_REQUEST['numd'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE number_dogovor LIKE '%".htmlspecialchars($_REQUEST['numd'])."%' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['datd'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE data_dogovora = '".htmlspecialchars($_REQUEST['datd'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['dato'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE data_okonchaniya = '".htmlspecialchars($_REQUEST['dato'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['typd'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE type_dogovor LIKE '".htmlspecialchars($_REQUEST['typd'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['nazp'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE nazvaniye_projekta LIKE '".htmlspecialchars($_REQUEST['nazp'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['jur'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE jur LIKE '".htmlspecialchars($_REQUEST['jur'])."'";
} else if (htmlspecialchars($_REQUEST['nazk'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE nazv_kontragenta LIKE '%".htmlspecialchars($_REQUEST['nazk'])."%' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['nask'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE nasha_kompaniya LIKE '".htmlspecialchars($_REQUEST['nask'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['famm'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE family_manager LIKE '%".htmlspecialchars($_REQUEST['famm'])."%' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['stoi'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE stoimost = '".htmlspecialchars($_REQUEST['stoi'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['razp'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE razmer_platezha = '".htmlspecialchars($_REQUEST['razp'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['sda'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE sdano_v_buhgalteriyu = '".htmlspecialchars($_REQUEST['sda'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['pol'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE poluchenie_sredstv = '".htmlspecialchars($_REQUEST['pol'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['num'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE num_pril_files = '".htmlspecialchars($_REQUEST['num'])."' ORDER BY id DESC";
} else if (htmlspecialchars($_REQUEST['sea'],ENT_QUOTES) != '') {
	$req = "SELECT * FROM dogovor WHERE opisaniye LIKE '%".htmlspecialchars($_REQUEST['sea'])."%' ORDER BY id DESC";
} else {

	  $req = "SELECT * FROM dogovor ORDER BY id DESC LIMIT " . $limit;
}



/*echo $req . "<br>";

print_r(htmlspecialchars($_REQUEST['sea'],ENT_QUOTES));*/




if (!$t = mysql_query($req)) {
		  echo mysql_error() . " Ошибка запроса к базе в строке ".__LINE__."<br>";
	  }




?>

<a class="clear btn-xs" href="clear.php?d=Y" style="font-size:smaller">Сбросить<br>настройки</a>

<table class="table table-striped">

<!--id-->
<tr><th class="col0"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <?
  $idzap = mysql_query("SELECT id FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?id='.$d['id'].'">'.$d['id'].'</a></li>';
  }
	?>
  </ul>
</div></th>



    <th class="col1" style="width:200px"><div class="row">
            <div class="col-lg-12">
                <div class="input-group">
                    <input type="text" id="snumd" name="numd" class="" placeholder="Номер">
                    <span class="input-group-addon" id="searchnumd">Ok!</span>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </th>



<th class="col2"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
  <?
  $idzap = mysql_query("SELECT DISTINCT data_dogovora FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?datd='.$d['data_dogovora'].'">'.substr($d['data_dogovora'],8,2).'-'.substr($d['data_dogovora'],5,2).'-'.substr($d['data_dogovora'],0,4).'</a></li>';
  }
	?>
  </ul>
</div></th>



<th class="col3"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
  <?
  $idzap = mysql_query("SELECT DISTINCT data_okonchaniya FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?dato='.$d['data_okonchaniya'].'">'.substr($d['data_okonchaniya'],8,2).'-'.substr($d['data_okonchaniya'],5,2).'-'.substr($d['data_okonchaniya'],0,4).'</a></li>';
  }
	?>
  </ul>
</div></th>



<th class="col4"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
  <?
  $idzap = mysql_query("SELECT DISTINCT type_dogovor FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?typd='.$d['type_dogovor'].'">'.$d['type_dogovor'].'</a></li>';
  }
	?>
  </ul>
</div></th>


<th class="col5"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
  <?
  $idzap = mysql_query("SELECT DISTINCT nazvaniye_projekta FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?nazp='.$d['nazvaniye_projekta'].'">'.$d['nazvaniye_projekta'].'</a></li>';
  }
	?>
  </ul>
</div></th>



<th class="col6"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
  <?
  $idzap = mysql_query("SELECT DISTINCT jur FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?jur='.$d['jur'].'">'.$d['jur'].'</a></li>';
  }
	?>
  </ul>
</div></th>








<th class="col7" style="width:200px"><div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" id="skon" name="nazk" class="" placeholder="Название">
      <span class="input-group-addon" id="searchkontr">Ok!</span>
    </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</th>






<th class="col8"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu9" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu9">
  <?
  $idzap = mysql_query("SELECT DISTINCT nasha_kompaniya FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?nask='.$d['nasha_kompaniya'].'">'.$d['nasha_kompaniya'].'</a></li>';
  }
	?>
  </ul>
</div></th>


<th class="col10" style="width:200px"><div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" id="famm" name="famm" class="" placeholder="Фамилия">
      <span class="input-group-addon" id="fammbutton">Ok!</span>
    </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row --></th>



<th class="col10" style="width:200px"><div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" id="search" name="search" class="" placeholder="Слово поиска">
      <span class="input-group-addon" id="searchbutton">Ok!</span>
    </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row --></th>



<th class="col11"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu11">
  <?
  $idzap = mysql_query("SELECT DISTINCT stoimost FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?stoi='.$d['stoimost'].'">'.$d['stoimost'].'</a></li>';
  }
	?>
  </ul>
</div></th>



<th class="col12"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu12" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu12">
  <?
  $idzap = mysql_query("SELECT DISTINCT razmer_platezha FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?razp='.$d['razmer_platezha'].'">'.$d['razmer_platezha'].'</a></li>';
  }
	?>
  </ul>
</div></th>


<th class="col13"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu13" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu13">
  <?
  $idzap = mysql_query("SELECT DISTINCT sdano_v_buhgalteriyu FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?sda='.$d['sdano_v_buhgalteriyu'].'">'.$d['sdano_v_buhgalteriyu'].'</a></li>';
  }
	?>
  </ul>
</div></th>


<th class="col14"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu14" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu14">
  <?
  $idzap = mysql_query("SELECT DISTINCT poluchenie_sredstv FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?pol='.$d['poluchenie_sredstv'].'">'.$d['poluchenie_sredstv'].'</a></li>';
  }
	?>
  </ul>
</div></th>



<th class="col50"><div class="dropdown">
  <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu15" data-toggle="dropdown" aria-expanded="true">
    Выбор
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu15">
  <?
  $idzap = mysql_query("SELECT DISTINCT num_pril_files FROM dogovor");
  for ($i=0; $i<mysql_num_rows($idzap); $i++) {
	$d = mysql_fetch_assoc($idzap);
	echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?num='.$d['num_pril_files'].'">'.$d['num_pril_files'].'</a></li>';
  }
	?>
  </ul>
</div></th>
<th class="col51">&nbsp;</th>
<th class="col52">&nbsp;</th></tr>


<tr><th class="col0"><span class=iks>-</span>ID</th>



<th class="col1"><span class=iks>-</span>Номер договора</th>
<th class="col2"><span class=iks>-</span>Дата договора</th>
<th class="col3"><span class=iks>-</span>Дата окончания договора</th>
<th class="col4"><span class=iks>-</span>Тип договора</th>
<th class="col5"><span class=iks>-</span>Название проекта</th>
<th class="col6"><span class=iks>-</span>Тип контрагента</th>
<th class="col7"><span class=iks>-</span>Название контрагента</th>
<th class="col8"><span class=iks>-</span>Наша компания</th>
<th class="col9"><span class=iks>-</span>Фамилия менеджера</th>
<th class="col10"><span class=iks>-</span>Описание</th>
<th class="col11"><span class=iks>-</span>Стоимость</th>
<th class="col12"><span class=iks>-</span>Размер платежа</th>
<th class="col13"><span class=iks>-</span>Сдано в бухгалтерию</th>
<th class="col14"><span class=iks>-</span>Получение средств</th>
<th class="col50"><span class=iks>-</span>Приложения</th>
<th class="col51"><span class=iks>-</span>Ссылка на файл договора</th>
<th class="col52"><span class=iks>-</span>История изменений</th></tr>

<? 

for ($i=0; $i<mysql_num_rows($t); $i++) {
	
	$r = mysql_fetch_assoc($t);
	
	echo "<tr>";
	
	
	$column_idenifier = 0;
	foreach ($r as $key=>$val) {
		
		if ($key == 'number_dogovor') {
			
			
			$num_dogovor = $val;
			
			echo "<td class=col".$column_idenifier.">";
			
				if ($user_name_req['group'] == 1 || $user_name_req['group'] == 3) {
					echo $val;
				?> <div> <a class='edit' href="/edit.php?numedit=<?=$val?>" title='Редактировать запись'><img src='images/edit2.png' height='30' /></a>
                        <div class="deldiv" id="deldiv<?=$i?>" style="display:none;"><p>Подтвердите удаление</p>
                            <p><div class=" btn btn-danger" onclick="location.href='/del.php?d=<?=$val?>'" autofocus>Удалить</div>&nbsp;
                            <div class="btn btn-default" onclick="$('#deldiv<?=$i?>').hide(0);">Отмена</div></p></div><a onclick="$('#deldiv<?=$i?>').show(0);">
                            <img class="del" src="images/delete.png" height="30" title="Удалить" /></a></div>
			<?	} else {
					echo $val;
				}
				
			echo "</td>";
			
		} else if ($key == 'data_dogovora') {
		
			echo "<td class=col2>".substr($val,8,2).'-'.substr($val,5,2).'-'.substr($val,0,4)."</td>";
		
		}
		
		else if ($key == 'data_okonchaniya') {
		
			echo "<td class=col3>".substr($val,8,2).'-'.substr($val,5,2).'-'.substr($val,0,4)."</td>";
		
		} else if ($key == 'num_pril_files' && $val != '') {
			
			
				echo "<td class=col50>";
				
				$zapros_dop = mysql_query("SELECT * FROM dop_dogovor WHERE parent LIKE '".$r['number_dogovor']."'");
				
				
					for ($r=0; $r<mysql_num_rows($zapros_dop); $r++) {
						$dop_dogovor[$r] = mysql_fetch_assoc($zapros_dop);
					}
					
					
					
				
				foreach ($dop_dogovor as $k=>$v) {

				if($v['file']!=''){
					$is_p = 0;
					if ( is_file( $v['file'] ) ) {
						$is_p = 1;

						if ( strpos( strtolower( $v['file'] ), 'jp' ) > 0 ) {

							echo '<div class="imcover" style="background:url(' . $v['file'] . ') center top / cover;" title="' . $v['opisaniye_prilozheniya'] . '"><a class="imclass" target="_blank" href="' . $v['file'] . '">&nbsp;</a></div>
					
					
					
					
					<!--<img src="images/newwindow.JPG" class="plus" id=span' . $k . $i . ' title="Открыть документ"><div class=dop_dogovor_popup id=dop_dogovor_' . $k . $i . '><span class=close>&times;</span><div class=dop_dogovor_num><strong>№ ' . $v['nomer_prilozheniya'] . ' </strong></div><div class=dop_dogovor_tip>' . $v['tip_prilozheniya'] . '</div><div class=dop_dogovor_date>' . date( 'd.m.Y', strtotime( $v['date_prilozheniya'] ) ) . ' </div><div class=dop_dogovor_opis>' . $v['opisaniye_prilozheniya'] . '</div><div class=dopdogovor_file>
					
					
					<a class="thumbnail" href="#demoLightbox' . $k . $i . '" data-toggle="lightbox"><img alt="' . $v['file'] . '" style="height:50px" src="' . $v['file'] . '"></a>
					
					<div aria-hidden="true" role="dialog" tabindex="-1" class="lightbox  fade" id="demoLightbox' . $k . $i . '" style="position: absolute; width: 1018px; height: 682px; top: 60px; left: 50%; margin-left: -509px; display: none; z-index:500">
					<div class="lightbox-content" style="width: 998px; height: 662px; " >
						<img src="' . $v['file'] . '" style="visibility:hidden">
						
						<div class="lightbox-caption"><p>' . $v['file'] . '</p></div>
					</div>
					</div>
		
		
						</div>
						</div>-->
						<!--popup-->';
						} else {

							echo "<p><a target='_blank' href='" . $v['file'] . "'>" . $v['file'] . "</a></p>";
						}
					} else {
						?>
						<p>Файл <?= $v['file'] ?> не существует</p>
						<?$v['file']='';?>
					<?
					}
				}
			} // foreach
				
			echo "</td>";
			
		} else if ($key == 'files') {
			$is = 0;
			if(is_file($val)) {
				$is = 1;


				if ( strpos( strtolower( $val ), 'jp' ) > 0 ) {
					echo '<td class=col51>
			<div class="imcover" style="background:url(' . $val . ') center top / cover;"><a class="imclass" href="' . $val . '">&nbsp;</a></div>
			<!--<a class="thumbnail" href="#demoLight' . $i . '" data-toggle="lightbox">
					<img alt="' . $val . '" style="height:50px" src="' . $val . '">
				</a><div aria-hidden="true" role="dialog" tabindex="-1" class="lightbox  fade" id="demoLight' . $i . '" style="position: absolute; width: 1018px; height: 682px; top: 60px; left: 50%; margin-left: -509px; display: none; z-index:500">
			<div class="lightbox-content" style="width: 998px; height: 662px; " >
				<img src="' . $val . '" style="visibility:hidden">
				<div class="lightbox-caption"><p>' . $val . '</p></div>
			</div>
		</div>--></td>';
				} else {
					echo "<td class=col51><a href='" . $val . "'>" . $val . "</a></td>";
				}

			}else{
				echo "<td class=col51>Файл ".$val." не существует</td>";
			}
			
		} else if ($key == 'num_pril_files' && $val == '') {
			
			echo "<td>Нет приложений</td>";
			
		} else {


				echo "<td class=col" . $column_idenifier . ">" . $val . "</td>";

			
		}
	
	  $column_idenifier++;
		
	}
	
	
	
	echo "<td class='col52'>";
	$izm_req = mysql_query("SELECT * FROM updates WHERE number = '".$num_dogovor."'");
	// echo "SELECT * FROM updates WHERE number = '".$num_dogovor."'";
	for ($r=0; $r<mysql_num_rows($izm_req); $r++) {
		$izm = mysql_fetch_assoc($izm_req);
		echo $izm['manager'] . ", " . date("d-m-Y", strtotime($izm['timestamp'])) . "<br>";
	}
	
	echo "</td>";
	
	
	echo "</tr>";
	
}



?>


</table>

</div>
<script type="text/javascript" src="bootstrap-lightbox.js"></script>

<?
		} else {
			echo "<script>alert('Запрещено. У вас нет прав.'); location.href='/'</script>";
		}
	}
	
  } else {
	  echo "<script>alert('Запрещено. Войдите по Логин/Паролю'); location.href='/log.php'</script>";
  }
  
  
?>
</form>
</body>
</html>