<? #error_reporting(E_ALL);
include('conf/conn.php');
mysqli_query($conn, "SET NAMES utf8");
if (htmlspecialchars($_POST['log'], 3) != ''
    && htmlspecialchars($_POST['pas'], 3) != ''
    && htmlspecialchars($_POST['submit'], 3) != ''
) {
    if (htmlspecialchars($_POST['can'], 3) < 2) {
        $zapros = "SELECT * FROM users WHERE pass LIKE '" . md5(htmlspecialchars($_POST['pas'], 3)) . "'";
        $user_req = mysqli_query($conn, $zapros);
        $recs = mysqli_num_rows($user_req);
        $line = mysqli_fetch_assoc($user_req);
        if ($recs < 1) {
            echo "<script>alert('Не правильный пароль. " . md5(htmlspecialchars($_POST['pas'], 3)) . "');
			location.href='/';</script>";
            exit();
        } else {
            $groups = array(1, 2, 3);
            if ($line['login'] == htmlspecialchars($_POST['log'], 3)
                && in_array($line['group'], $groups)
            ) {
                $val = md5(htmlspecialchars($_POST['log'], 3));
                setcookie('orderhash', $val, time() + 60 * 60 * 24 * 365, '/', $_SERVER['HTTP_HOST']); ?>
                <?
                if (mysqli_query($conn, "UPDATE users SET hashh = '" . $val . "', last_login = '" . date('Y-m-d') . "' WHERE login = '" . htmlspecialchars($_POST['log'], 3) . "'")) {
                    echo "<script>
                    location.href='/';
                    </script>";
                }
            } else {
                echo "<script>alert('Пользователь не подтвержден администратором.'); location.href='/';</script>";
            }
        }
    } else {
        echo "<script>alert('Не отмечен антиспам'); window.history.back()</script>";
    }
}


function rus2translit($string)
{
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => 'j', 'ы' => 'y', 'ъ' => 'j',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

        'А' => 'A', 'Б' => 'B', 'В' => 'V',
        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ь' => 'j', 'Ы' => 'Y', 'Ъ' => 'j',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        ' ' => '_', '№' => 'No'
    );
    return strtr($string, $converter);
}

function str2url($str)
{
// переводим в транслит
    $str = rus2translit($str);
// в нижний регистр
    $str = strtolower($str);
// заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
// удаляем начальные и конечные '-'
    $str = trim($str, "-");
    return $str;
}

if ($_POST["submit"] != '') {
    if (htmlspecialchars($_POST["phrase"]) != '') {
        if (htmlspecialchars($_POST["man"]) != '') {
            $phrase = htmlspecialchars($_POST["phrase"], 3);
            $tags = htmlspecialchars($_POST["tags"], 3);
            $sort = htmlspecialchars($_POST["sort"], 3);
            $comment = htmlspecialchars($_POST["comment"], 3);
            $query = "INSERT INTO phrase (id, phrase, tags, sort, comment) VALUES ('', '$phrase', '$tags', '$sort', '$comment')";
            $isthere = mysqli_query($conn, "SELECT phrase FROM phrase WHERE phrase LIKE '%$phrase%'");
            $res_isthere = mysqli_num_rows($isthere);
            if ($res_isthere > 0) {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true" class="clo">&times;</span><span class="sr-only" data-dismiss="alert">Закрыть</span></button>
  <strong>Ошибка!</strong> Такой код <pre>' . $phrase . '</pre> уже заведен</div>';
                exit();
            }
            if (!mysqli_query($conn, $query)) {
                echo mysqli_error($conn) . "<br>In line " . __LINE__ . " " . $query . "<br>";
            } else {
                echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true" class="clo">&times;</span><span class="sr-only" data-dismiss="alert">Закрыть</span></button>
  <strong>Отлично!</strong> Текст добавлен</div>';
            }
            ?>
        <? } else {
            echo "<script>alert('Не отмечен антиспам'); window.history.back()</script>";
        }
    } else {
        echo "<script>alert('Фраза не введена'); window.history.back()</script>";
    }
}
if ($_COOKIE['orderhash'] != '') {
$auth_req = mysqli_query($conn, "SELECT * FROM users WHERE hashh = '" . $_COOKIE['orderhash'] . "'");
$user_name_req = mysqli_fetch_assoc($auth_req);
$name = $user_name_req['name'];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Список полезных функций</title>
    <script src="js/jquery-1.12.2.js"></script>
    <script src="js/func.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <div class="row">
        <a class="btn btn-default" href="//maxkuku.ru">Главная</a>&nbsp;
        <a class="btn btn-default" href="//maxkuku.ru/articles.php">Статьи</a>&nbsp;
        <a class="btn btn-default" href="//webmaster.cf">Список полезных функций</a>
        <div class='col-sm-3'><?=$name?><br><a href='/clear.php?c=Y'>Выход</a></div>
        <div class='col-sm-2'><button class='btn btn-info' data-toggle='modal' data-target='#modal'>Добавить</button></div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <? if (strlen($_COOKIE['orderhash']) < 1) { ?>
            <div class="centered col-sm-6 col-sm-offset-3">
                    <form method="post" role="form" action="">
                        <div class="form-group input-group-lg">
                            <div class="form-group input-group">
                                <label for="log">Логин</label>
                                <input type="text" class="form-control" id="log" name="log" placeholder="Логин">
                            </div>
                            <div class="form-group input-group">
                                <label for="pas">Пароль</label>
                                <input type="password" class="form-control" id="pas" name="pas" placeholder="Пароль">
                            </div>
                            <div class="form-group input-group">
                                <label for="submit">&nbsp;</label>
                                <input type="submit" name="submit" class="form-control btn-primary" id="submit"
                                       value="Войти">
                            </div>
                            <div class="form-group input-group">

                                <div title="Да, нет, не знаю">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="can" id="inlineRadio1"
                                               value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="can" id="inlineRadio2"
                                               value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="can" id="inlineRadio3"
                                               value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group input-group">
                                <button class="btn btn-info" style="margin-top: 10px;" value=""
                                        onclick="$('.container').show()">Добавить
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
        <? } ?>
    </div>



<script>
    function mod_toggle() {
        $('.modal').modal('toggle')
    }
</script>
<?

if ($name == "") {
    echo "<script>alert('Сессия истекла. Пройдите авторизацию.'); location.href='/log.php'</script>";
}
if ($name != '') {
if ($user_name_req['group'] == 1 || $user_name_req['group'] == 2 || $user_name_req['group'] == 3) { ?>



<div class="modal fade" id='modal'>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Добавить запись</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" class="form-horizontal well" role="form">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10240000"/>

                    <div class="form-group input-group-lg">
                        <label for="phrase" class="col-sm-3 control-label">Текст</label>

                        <div class="col-sm-9"><textarea name="phrase" id="phrase"
                                                         class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group input-group-lg">
                        <label for="tags" class="col-sm-3 control-label">Теги</label>

                        <div class="col-sm-9"><input class="form-control" type="text" id="tags" name="tags"
                                                      value="" size="20" maxlength="200"
                                                      placeholder="Через запятую"/>
                        </div>
                    </div>
                    <div class="form-group input-group-lg">
                        <label for="sort" class="col-sm-3 control-label">Сортировка</label>

                        <div class="col-sm-9"><input class="form-control" type="number" id="sort" name="sort"
                                                      value="" size="20" maxlength="10" placeholder="100, 200"/>
                        </div>
                    </div>
                    <div class="form-group input-group-lg">
                        <label for="comment" class="col-sm-3 control-label">Комментарий</label>

                        <div class="col-sm-9"><textarea name="comment" id="comment"
                                                         class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group input-group-lg">
                        <label for="man" class="col-sm-3 control-label">Добавить или не человек</label>


                        <div class="input-group col-sm-9">


                            <label for="lab1">первый
                                <input class="form-control" id="lab1" type="radio" name="man" value="Y"/></label>
                            <label for="lab2">второй
                                <input class="form-control" id="lab2" type="radio" name="man" value="N"/></label>
                            <label for="lab3">третий
                                <input class="form-control" id="lab3" type="radio" name="man" value="G"/></label>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group input-group-lg">

                        <label for="submit" class="col-sm-2 control-label">&nbsp;</label>

                        <div class="col-sm-6"><input type="submit" name="submit" class="btn btn-lg btn-primary"
                                                     value="Добавить запись">
                        </div>
                    </div>
                    <!--<div class="form-group input-group-lg">
                        <label for="files" class="col-sm-2 control-label">Прилагаемые файлы к договору (.jpg, .pdf 10МБ max)</label>
                        <div class="col-sm-10">
                        <span class=""> <input class="" type="file" name="files" id="files"></span></div>
                    </div>  -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /container -->


<div class="pagerdiv container-fluid">
    <div class="row">
        <h1>Логин в базу</h1>

        <? $limit = htmlspecialchars($_REQUEST['limit'], 3);
        $page = htmlspecialchars($_REQUEST['page'], 3);
        if ($limit == '') {
            $limit_phrase = "0, 10";
            $limit = 10;
            $page = 1;
        } else {
            $lb = ($page - 1) * $limit;
            $limit_phrase = $lb . "," . $limit;
        }

        $s = htmlspecialchars($_REQUEST['s'], 3);
        if (!empty($s)):
            $sort_phrase = "ORDER BY sort " . $s;
        else:
            $sort_phrase = "ORDER BY id DESC";
        endif;

        if (htmlspecialchars($_REQUEST['id'], 3) != '') {
            $req = "SELECT * FROM phrase WHERE id = " . (int)htmlspecialchars($_REQUEST['id']);
        } else if (htmlspecialchars($_REQUEST['numd'], 3) != '') {
            $req = "SELECT * FROM phrase WHERE phrase LIKE '%" . trim(htmlspecialchars($_REQUEST['numd'])) . "%' " . $sort_phrase;
        } else if (htmlspecialchars($_REQUEST['search_tags'], 3) != '') {
            $req = "SELECT * FROM phrase WHERE tags LIKE '%" . trim(htmlspecialchars($_REQUEST['search_tags'])) . "%' " . $sort_phrase;
        } else if (htmlspecialchars($_REQUEST['comment_search'], 3) != '') {
            $req = "SELECT * FROM phrase WHERE comment LIKE '%" . trim(htmlspecialchars($_REQUEST['comment_search'])) . "%' " . $sort_phrase;
        } else {

            $req = "SELECT * FROM phrase " . $sort_phrase . " LIMIT " . $limit_phrase;
        }

        if (!$t = mysqli_query($conn, $req)) {
            echo mysqli_error($conn) . " Ошибка запроса к базе в строке " . __LINE__ . "<br>";
        }
        ?>


        <table class="table table-striped">
            <!--id-->
            <tr>
                <th class="col0 col-sm-1">
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-expanded="true">
                            Выбор
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <?
                            $idzap = mysqli_query($conn, "SELECT id FROM phrase");
                            for ($i = 0; $i < mysql_num_rows($idzap); $i++) {
                                $d = mysqli_fetch_assoc($idzap);
                                echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?id=' . $d['id'] . '">' . $d['id'] . '</a></li>';
                            } ?>
                        </ul>
                    </div>
                </th>
                <th class="col1" width="70%">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" id="snumd" name="phrase_search" class="form-control"
                                       placeholder="Поиск по фразе">
                                <span class="input-group-addon" id="searchnumd">Ok!</span>
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </th>
                <th class="col2">
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu3"
                                data-toggle="dropdown" aria-expanded="true">
                            Выбор
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                            <?
                            $idzap = mysqli_query($conn, "SELECT DISTINCT tags FROM phrase");
                            for ($i = 0; $i < mysql_num_rows($idzap); $i++) {
                                $d = mysqli_fetch_assoc($idzap);
                                $splitted = explode(",", $d['tags']);
                                foreach ($splitted as $s) {
                                    $arr_words[] = $s;
                                }
                            }
                            $words = array_unique($arr_words);
                            sort($words);
                            for ($y = 0; $y < count($words); $y++) {
                                echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="?search_tags=' . $words[$y] . '">' . $words[$y] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </th>
                <th>
                    <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu4"
                                data-toggle="dropdown" aria-expanded="true">
                            Выбор
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=ASC">ACS</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=DESC">DESC</a></li>
                        </ul>
                    </div>
                </th>
                <th class="col1" style="width:200px">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" id="comment_search" name="comment_search" class="form-control"
                                       placeholder="Поиск по комментарию">
                                <span class="input-group-addon" id="searchnumc">Ok!</span>
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </th>
                <?
                for ($j = 0; $j < mysqli_num_rows($t); $j++) {
                    $row = mysqli_fetch_assoc($t);
                    echo "<tr><td>" . $row['id'] . "</td><td><pre>" . $row['phrase'] . "</pre></td><td>" . $row['tags'] . "</td><td>" . $row['sort'] . "</td><td>" . $row['comment'] . "</td></tr>";
                }
                echo "</table>";
                }
                }
                }


                $recs = mysqli_query($conn, "SELECT COUNT(id) AS NUM FROM phrase");
                $all_recs = mysqli_fetch_assoc($recs);

                ($limit == "") ? $limit = 20 : $limit;
                ?>



                <? for ($i = 0; $i < ceil((int)$all_recs["NUM"] / $limit); $i++) { ?>
                    <? $num = $i + 1;
                    /*$in = array(
                        "/page=\d/",
                         "/limit=\d/"
                        );
                    $out = array(
                        "/page=$num/",
                        "/limit=$limit/"
                        );*/
                    ?>
                    <? /* preg_replace($in, $out, $_SERVER["QUERY_STRING"]) */ ?>
                    <a class="pager_a btn <?= $page == $num ? "btn-info" : "btn-default" ?>"
                       href="?page=<?= $num ?>&limit=<?= $limit ?>">
                        <span class="<?= $page == $num ? "active" : "" ?> pager_button"><?= $num ?></span>
                    </a>
                <? } ?>


    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="bot"><sub>________________</sub><br/>

            <p>&copy; maxkuku.ru</p></div>
    </div>
</footer>



</div>



</body>
</html>