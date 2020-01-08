<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if($_REQUEST['ajax']=='Y')
$APPLICATION->RestartBuffer();

?>

<style type="text/css">
    .form .top-form {padding-top:0px !important;}
    input[type="number"] {max-width:100px; text-align: center;}
    input[type=number]::-webkit-inner-spin-button {opacity: 1;}
    input{text-align: center;}
</style>
<h2>Расчет стоимости широкоформатной печати баннера</h2>
<br>
<?php ######## CALCULATOR  index v 0.99 !!!  ######### ?>
<div class="row">
    <p style="color:#de002b;"><strong>Сначала нужно выбрать качество печати</strong></p>
    <div class="col-md-3">
        1. Качество печати:<br>
        <select size="1" name="dpi" class="btn btn-warning form-control">
            <option value="0" selected="selected">Выбрать качество</option>
            <option value="185">360 dpi (Обычное)</option>
            <option value="187">720 dpi (Хорошее)</option>
            <option value="188">1440 dpi (Высокое)</option>
        </select>
    </div>
    <div class="col-md-9">
        2. Выберите Материал баннера:<br>
        <select size="1" name="mat" class="btn btn-info form-control">
            <option selected="selected" value="0">Выбрать материал</option>
        </select>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-sm-6 control-label">Высота, мм.:</label><input name="hei" placeholder="0" value="10000" type="number">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-sm-6 control-label">Ширина, мм.:</label><input name="wid" placeholder="0" value="10000" type="number">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="col-sm-6 control-label">3. Кол-во копий:</label> <b class="minus"></b> <input name="num" value="1" maxlength="3" size="8" type="number"> <b class="plus"></b>
        </div>
    </div>
</div>
<p class="text_step">
    Постпечатная обработка:
</p>
<div class="col-sm-12 step settings_block">
    <div class="row options printing_options">
        <div class="col-sm-7 five-three">
            <div class="row">
                <div class="col-sm-4">
                    <div class="option setting_row">
                        <p class="title_option">
                            <img src="icon_option1.png" alt=""><span class="setting_title">Люверсы</span>
                        </p>
                        <div class="to_check_block selection_hand eyelets">
                            <label for="eyelets_left" class="left"><input id="eyelets_left" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_top" class="top"><input id="eyelets_top" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_right" class="right"><input id="eyelets_right" class="eyelets_price setting_price_input" type="checkbox"></label> <label for="eyelets_bottom" class="bottom"><input id="eyelets_bottom" class="eyelets_price setting_price_input" type="checkbox"></label>
                            <div class="option3 border1 eyelets_price change_look" id="option3_eyelets_price_1" name="option3_eyelets_price_1">
                                <p class="border_top">
                                </p>
                                <p class="border_bottom">
                                </p>
                                <p class="border_left">
                                </p>
                                <p class="border_right">
                                </p>
                            </div>
                        </div>
                        <div style="clear:both">
                        </div>
                        <select size="1" name="luv_step">
                            <option value="229">Шаг 10 см</option>
                            <option value="230">Шаг 20 см</option>
                            <option value="237" selected="selected">Шаг 30 см</option>
                            <option value="231">Шаг 40 см</option>
                            <option value="232">Шаг 50 см</option>
                            <option value="233">Шаг 100 см</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="option setting_row">
                        <p class="title_option">
                            <img src="icon_option3.png" alt=""><span class="setting_title">Проварка краев</span>
                        </p>
                        <div class="selection_hand to_check_block prov">
                            <label for="prov_left" class="left"><input id="prov_left" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_top" class="top"><input id="prov_top" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_right" class="right"><input id="prov_right" class="strengs_price setting_price_input" type="checkbox"></label> <label for="prov_bottom" class="bottom"><input id="prov_bottom" class="strengs_price setting_price_input" type="checkbox"></label>
                            <div class="option3 border3 strengs_price change_look" id="prov_price_1" name="prov_price_1">
                                <p class="border_top">
                                </p>
                                <p class="border_bottom">
                                </p>
                                <p class="border_left">
                                </p>
                                <p class="border_right">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="option setting_row">
                        <p class="title_option">
                            <img src="icon_option4.png" alt=""><span class="setting_title">Резка в размер</span>
                        </p>
                        <div class="selection_hand to_check_block obrezka">
                            <label for="rez_left" class="left"><input id="rez_left" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_top" class="top"><input id="rez_top" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_right" class="right"><input id="rez_right" class="pruning_price setting_price_input" type="checkbox"></label> <label for="rez_bottom" class="bottom"><input id="rez_bottom" class="pruning_price setting_price_input" type="checkbox"></label>
                            <div class="option3 border4 pruning_price change_look" id="obrezka_price_1" name="obrezka_price_1">
                                <p class="border_top">
                                </p>
                                <p class="border_bottom">
                                </p>
                                <p class="border_left">
                                </p>
                                <p class="border_right">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 five-two">
            <div class="row">
                <div class="col-sm-6">
                    <div class="option setting_row">
                        <p class="title_option">
                            <img src="icon_option5.png" alt=""><span class="setting_title">Усиление шнуром</span>
                        </p>
                        <div class="selection_hand to_check_block shnur">
                            <label for="shnur_left" class="left"><input id="shnur_left" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_top" class="top"><input id="shnur_top" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_right" class="right"><input id="shnur_right" class="shnur_price setting_price_input" type="checkbox"></label> <label for="shnur_bottom" class="bottom"><input id="shnur_bottom" class="shnur_price setting_price_input" type="checkbox"></label>
                            <div class="option3 border5 shnur_price change_look" id="shnur_price_1" name="shnur_price_1">
                                <p class="border_top">
                                </p>
                                <p class="border_bottom">
                                </p>
                                <p class="border_left">
                                </p>
                                <p class="border_right">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="option setting_row">
                        <p class="title_option">
                            <img src="icon_option2.png" alt=""><span class="setting_title">Проклейка кармана </span>
                        </p>
                        <div class="selection_hand to_check_block karman">
                            <label for="karm_left" class="left"><input id="karm_left" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_top" class="top"><input id="karm_top" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_right" class="right"><input id="karm_right" class="pockets_price setting_price_input" type="checkbox"></label> <label for="karm_bottom" class="bottom"><input id="karm_bottom" class="pockets_price setting_price_input" type="checkbox"></label>
                            <div class="option3 border2 pockets_price change_look" id="karm_price_1" name="karm_price_1">
                                <p class="border_top">
                                </p>
                                <p class="border_bottom">
                                </p>
                                <p class="border_left">
                                </p>
                                <p class="border_right">
                                </p>
                            </div>
                        </div>
                        <div style="clear:both;">
                        </div>
                        <select size="1" name="karm">
                            <option value="235">Шаг 10 см</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear:both;">
</div>
<br>
<strong>Итоговые подсчеты:</strong><br>
<br>
<div id="calc_all_prices">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена печати:</label><input name="price_item" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена печати 1 м<sup>2</sup>:</label><input name="price_m" placeholder="0" disabled="disabled" size="4" type="text"> руб.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена люверсов:</label><input name="luv_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Кол-во люверсов, шт.:</label><input name="luver_count" placeholder="0" disabled="disabled" size="19" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена проварки:</label><input name="provar_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Пог. м. проварки:</label><input name="provar_count" placeholder="0" disabled="disabled" size="19" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена резки:</label><input name="rez_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Пог. м. резки:</label><input name="rez_count" placeholder="0" disabled="disabled" size="19" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена шнура:</label><input name="shnur_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Пог.м. шнура:</label><input name="shnur_count" placeholder="0" disabled="disabled" size="19" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-sm-6 control-label">Цена карманов:</label><input name="karman_all" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="col-sm-6 control-label">Пог. м. карманов:</label><input name="karmans_count" placeholder="0" disabled="disabled" size="19" type="text">
            </div>
        </div>
    </div>
    <div class="row btn btn-success" style="width:100%;padding-bottom:0;margin:0;">
        <div class="col-md-3" style="text-align:left;">
            <div class="form-group">
                <label class="col-sm-6 control-label">Итого:</label><input name="itogo" placeholder="0" disabled="disabled" size="8" type="text"> руб.
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="col-sm-6 control-label">Площадь:</label><input name="square" placeholder="0" disabled="disabled" size="6" type="text"> м<sup>2</sup>,
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="col-sm-6 control-label">Периметр:</label><input name="aper" placeholder="0" disabled="disabled" size="3" type="text"> м.
            </div>
        </div>
    </div>
    <div class="row" style="display:none !important;margin-top:30px;">
        <div class="col-sm-7 five-three">
            <div class="row">
                <div class="col-sm-4">
                    <div style="display:none !important;">
                        Позиции люверсов: <input value="" disabled="disabled" name="luversy_position" size="24" type="text">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="display:none !important;">
                        Позиции карманов: <input value="" disabled="disabled" name="karman_position" size="24" type="text">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="display:none !important;">
                        Позиции проклейки: <input value="" disabled="disabled" name="provar_position" size="24" type="text">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 five-two">
            <div class="row">
                <div class="col-sm-6">
                    <div style="display:none !important;">
                        Позиции обрезки: <input value="" disabled="disabled" name="rez_position" size="24" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="display:none !important;">
                        Позиции шнуров: <input value="" disabled="disabled" name="shnur_position" size="24" type="text">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="display:none !important;">
            шаг люверсов: <input name="luv_step" placeholder="0" disabled="disabled" size="4" type="text"> мм.
        </div>
        <div class="col-md-3" style="display:none !important;">
            шаг карманов: <input name="karman_step" placeholder="0" disabled="disabled" size="4" type="text"> мм.
        </div>
    </div>
</div>
<script>
    eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(16).3N(7(){7 e(){7 e(){1c e="";1v e+=W*A==0?"":W*A,e+=X*A==0?"":(""==e?"":"+")+X*A,e+=Y*A==0?"":(""==e?"":"+")+Y*A,e+=Z*A==0?"":(""==e?"":"+")+Z*A,-1!=e.1n("+")&&(e+="="+2G*A),""==e?"Без люверсов":e+=""}7 O(){1c e="";1v e+=1Q*A==0?"":1Q*A,e+=1Y*A==0?"":(""==e?"":"+")+1Y*A,e+=24*A==0?"":(""==e?"":"+")+24*A,e+=2a*A==0?"":(""==e?"":"+")+2a*A,-1!=e.1n("+")&&(e+="="+2J*A),""==e?"Без карманов":e+=""}7 w(){1c e="";1v e+=27*A==0?"":27*A,e+=2b*A==0?"":(""==e?"":"+")+2b*A,e+=22*A==0?"":(""==e?"":"+")+22*A,e+=23*A==0?"":(""==e?"":"+")+23*A,-1!=e.1n("+")&&(e+="="+2C*A),""==e?"Без Проварки":e+=""}7 N(){1c e="";1v e+=28*A==0?"":28*A,e+=25*A==0?"":(""==e?"":"+")+25*A,e+=26*A==0?"":(""==e?"":"+")+26*A,e+=1W*A==0?"":(""==e?"":"+")+1W*A,-1!=e.1n("+")&&(e+="="+2E*A),""==e?"Без резки":e+=""}7 L(){1c e="";1v e+=1S*A==0?"":1S*A,e+=1T*A==0?"":(""==e?"":"+")+1T*A,e+=1U*A==0?"":(""==e?"":"+")+1U*A,e+=1V*A==0?"":(""==e?"":"+")+1V*A,-1!=e.1n("+")&&(e+="="+2I*A),""==e?"Без шнуров":e+=""}1c q=$(\'5[3="1R"]\').6(),j=$(\'5[3="21"]\').6(),A=$(\'5[3="2g"]\').6(),D=$(\'1h[3="2D"]\').6(),F=$(\'1h[3="1w"]\').6(),G=$(\'1h[3="1Z"] 1s:1x\').6(),H=n[G].1u,J=$(\'1h[3="2Q"] 1s:1x\').6(),K=n[J].1u,P=0,Q=0,R=0,S=0,T=0,U=0,V=0;31(q&&j&&(P=2*q+2*j,Q=P*A,R=a(j*q,2),S=a(j*q*A,2),T=a(R/36,4),$(\'5[3="3j"]\').6(S/36,4),$(\'5[3="3k"]\').6(a(Q/1i,4))),T&&0!=F&&0!=D){U=3U>T*A?t[D][F].1f:3T>T*A?t[D][F].1d:3S>T*A?t[D][F].1e:t[D][F].1g,U=a(U,2);1c W=1!=l.11||l.18?0:15.17(j/H),X=1!=o.11||o.18?0:15.17(j/H),Y=1!=s.11||s.18?0:15.17(q/H),Z=1!=d.11||d.18?0:15.17(q/H),2G=W+X+Y+Z,2B=2G*c*A,3n=e();$(\'5[3="3t"]\').6(3n),$(\'5[3="1Z"]\').6(H),$(\'5[3="2r"]\').6(2B);1c 1Q=1!=u.11||u.18?0:15.17(j/K/10),1Y=1!=m.11||m.18?0:15.17(j/K/10),24=1!=h.11||h.18?0:15.17(q/K/10),2a=1!=v.11||v.18?0:15.17(q/K/10),2J=1Q+1Y+24+2a,2H=2J*3s*A,38=O();$(\'5[3="3H"]\').6(38),$(\'5[3="3F"]\').6(K),$(\'5[3="2k"]\').6(2H);1c 27=1!=g.11||g.18?0:15.17(j/1i),2b=1!=b.11||b.18?0:15.17(j/1i),22=1!=k.11||k.18?0:15.17(q/1i),23=1!=f.11||f.18?0:15.17(q/1i),2C=27+2b+22+23,$e=2C*r*A,2S=w();$(\'5[3="3u"]\').6(2S),$(\'5[3="2q"]\').6($e);1c 28=1!=y.11||y.18?0:15.17(j/1i),25=1!=z.11||z.18?0:15.17(j/1i),26=1!=C.11||C.18?0:15.17(q/1i),1W=1!=B.11||B.18?0:15.17(q/1i),2E=28+25+26+1W,2A=2E*i*A,3g=N();$(\'5[3="3w"]\').6(3g),$(\'5[3="2o"]\').6(2A);1c 1S=1!=I.11||I.18?0:15.17(j/1i),1T=1!=M.11||M.18?0:15.17(j/1i),1U=1!=E.11||E.18?0:15.17(q/1i),1V=1!=x.11||x.18?0:15.17(q/1i),2I=1S+1T+1U+1V,2K=2I*p*A,3q=L();$(\'5[3="3z"]\').6(3q),$(\'5[3="2m"]\').6(2K),1z=a(T*U*A,2),3R=a(1z*A,2),V=a(1z*A+2A*A+$e*A+2K*A+2B*A+2H*A,2),$(\'5[3="2v"]\').6(U),$(\'5[3="1z"]\').6(a(1z,2)),$(\'5[3="2t"]\').6(a(V/A,2)),$("#14").2F(""),$("#14").12($(\'5[3="2g"]\').6()+" копий;- "),$("#14").12($(\'5[3="2t"]\').6()+" руб. Итого (СУММА); \\r\\n\\r"),$("#14").12($(\'1h[3="2D"] 1s:1x\').2F()+" / "),$("#14").12($(\'1h[3="1w"] 1s:1x\').2F()+"; "),$("#14").12($(\'5[3="2v"]\').6()+" руб. (по цене за 1 м?); \\r\\n\\r"),$("#14").12($(\'5[3="21"]\').6()+" мм. - Высота; "),$("#14").12($(\'5[3="1R"]\').6()+" мм. - Ширина; "),$("#14").12($(\'5[3="3j"]\').6()+" м? - Площадь; "),$("#14").12($(\'5[3="3k"]\').6()+" м - Периметр \\r\\n\\r"),$("#14").12($(\'5[3="2r"]\').6()+" руб. - Стоимость люверсов; "),$("#14").12($(\'5[3="1Z"]\').6()+" мм. - Шаг люверсов \\r"),$("#14").12($(\'5[3="3t"]\').6()+" - Кол-во люверсов \\r"),$("#14").12($(\'5[3="3I"]\').6()+" - Расположение люверсов \\r\\n\\r"),$("#14").12($(\'5[3="2q"]\').6()+" руб. - Стоимость проварки \\r"),$("#14").12($(\'5[3="3u"]\').6()+" - края проварки \\r"),$("#14").12($(\'5[3="2M"]\').6()+" - Расположение проварки \\r\\n\\r"),$("#14").12($(\'5[3="2o"]\').6()+" руб. - Стоимость резки \\r"),$("#14").12($(\'5[3="3w"]\').6()+" - края резки \\r"),$("#14").12($(\'5[3="3c"]\').6()+" - Расположение резки \\r\\n\\r"),$("#14").12($(\'5[3="2m"]\').6()+" руб. - Стоимость шнуров \\r"),$("#14").12($(\'5[3="3z"]\').6()+" - кол-во шнуров \\r"),$("#14").12($(\'5[3="3y"]\').6()+" - Расположение шнуров \\r\\n\\r"),$("#14").12($(\'5[3="2k"]\').6()+" руб. -  Стоимость карманов; "),$("#14").12($(\'5[3="3F"]\').6()+" мм. - шаг карманов \\r"),$("#14").12($(\'5[3="3H"]\').6()+" - кол-во карманов \\r"),$("#14").12($(\'5[3="2W"]\').6()+" - Расположение карманов \\r\\n\\r")}3P $(\'5[3="2v"]\').6(0),$(\'5[3="1z"]\').6(0),$(\'5[3="2t"]\').6(0),$(\'5[3="2r\').6(0),$(\'5[3="2q\').6(0),$(\'5[3="2o\').6(0),$(\'5[3="2m\').6(0),$(\'5[3="2k\').6(0)}7 a(e,a){31(32(e)||32(a))1v!1;1c n=15.3O(10,a);1v 15.17(e*n)/n}$("#3A").13(7(){$("#29 .1M").1b("1a"),e()}),$("#3C").13(7(){$("#29 .1P").1b("1a"),e()}),$("#3B").13(7(){$("#29 .1A").1b("1a"),e()}),$("#3E").13(7(){$("#29 .1O").1b("1a"),e()}),$("#3L").13(7(){$("#2e .1M").1b("1a"),e()}),$("#3h").13(7(){$("#2e .1P").1b("1a"),e()}),$("#3x").13(7(){$("#2e .1A").1b("1a"),e()}),$("#33").13(7(){$("#2e .1O").1b("1a"),e()}),$("#2U").13(7(){$("#2d .1M").1b("1a"),e()}),$("#2P").13(7(){$("#2d .1P").1b("1a"),e()}),$("#2R").13(7(){$("#2d .1A").1b("1a"),e()}),$("#2N").13(7(){$("#2d .1O").1b("1a"),e()}),$("#2X").13(7(){$("#2c .1M").1b("1a"),e()}),$("#39").13(7(){$("#2c .1P").1b("1a"),e()}),$("#34").13(7(){$("#2c .1A").1b("1a"),e()}),$("#3a").13(7(){$("#2c .1O").1b("1a"),e()}),$("#3d").13(7(){$("#1X .1M").1b("1a"),e()}),$("#3p").13(7(){$("#1X .1P").1b("1a"),e()}),$("#3M").13(7(){$("#1X .1A").1b("1a"),e()}),$("#3m").13(7(){$("#1X .1O").1b("1a"),e()});1c n={2Z:{1q:30,1r:10},3V:{1q:30,1r:10},3Q:{1q:20,1r:10},3X:{1q:20,1r:10,1u:3e},2V:{1q:20,1r:10,1u:3b},4c:{1q:20,1r:10,1u:1j},4B:{1q:20,1r:10,1u:1B},4m:{1q:20,1r:10,1u:3D},4n:{1q:20,1r:10,1u:1i},4p:{1q:30,1r:10,1u:3e}},t={4l:{4o:{3:"Баннер Ламинированный 1j г/м?",1f:1C,1d:3b,1e:2O,1g:4q},4s:{3:"Баннер Ламинированный 2x г/м?",1f:1j,1d:37,1e:4k,1g:2w},4t:{3:"Баннер Литой Европа 1t г/м?",1f:2l,1d:2Y,1e:37,1g:2y},4u:{3:"Баннер Литой 2u (Транслюцентный) 1t г/м?",1f:1y,1d:2l,1e:3J,1g:2z},4v:{3:"Баннер Литой 2n (Светоблокирующий) 1t г/м?",1f:3v,1d:3o,1e:2T,1g:1j},4w:{3:"Баннерная сетка 1y г/м?",1f:1j,1d:2Y,1e:1C,1g:2y}},4x:{4y:{3:"Баннер Ламинированный 1j г/м?",1f:2Z,1d:4z,1e:2L,1g:2L},4A:{3:"Баннер Ламинированный 2x г/м?",1f:1j,1d:4r,1e:1C,1g:2O},4j:{3:"Баннер Литой Европа 1t г/м?",1f:1B,1d:2p,1e:1C,1g:2w},48:{3:"Баннер Литой 2u (Транслюцентный) 1t г/м?",1f:2s,1d:4h,1e:3G,1g:1j},3Z:{3:"Баннер Литой 2n (Светоблокирующий) 1t г/м?",1f:3i,1d:3r,1e:1y,1g:2T},40:{3:"Баннерная сетка 1y г/м?",1f:1j,1d:2z,1e:2V,1g:2w}},41:{3W:{3:"Баннер Ламинированный 1j г/м?",1f:1y,1d:2l,1e:2z,1g:2y},42:{3:"Баннер Ламинированный 2x г/м?",1f:1B,1d:2p,1e:3J,1g:1C},43:{3:"Баннер Литой Европа 1t г/м?",1f:2s,1d:1B,1e:3G,1g:1j},44:{3:"Баннер Литой 2u (Транслюцентный) 1t г/м?",1f:3D,1d:2s,1e:1B,1g:2p},45:{3:"Баннер Литой 2n (Светоблокирующий) 1t г/м?",1f:46,1d:3i,1e:3v,1g:4i},47:{3:"Баннерная сетка 1y г/м?",1f:3r,1d:1y,1e:3o,1g:1j}}};$(\'5[3="2g"]\').2f("13 2h 5 1l",7(){8.1k.2i(/[^0-9]/g)&&(8.1k=8.1k.2j(/[^0-9]/g,"")),e()}),$(\'5[3="1R"]\').2f("13 2h 5 1l",7(){8.1k.2i(/[^0-9]/g)&&(8.1k=8.1k.2j(/[^0-9]/g,"")),e()}),$(\'5[3="21"]\').2f("13 2h 5 1l",7(){8.1k.2i(/[^0-9]/g)&&(8.1k=8.1k.2j(/[^0-9]/g,"")),e()}),$(\'5[3="1R"]\').13(7(){e()}),$(\'5[3="21"]\').13(7(){e()}),$(\'1h[3="1w"]\').13(7(){e()}),$(\'1h[3="1Z"]\').3K("1l",7(){e()}),$(\'1h[3="2Q"]\').3K("1l",7(){e()}),$(\'1h[3="2D"]\').13(7(){$(8).6()&&0!=$(8).6()?($(\'1h[3="1w"]\').3l(),$(\'1h[3="1w"]\').12($(\'<1s 1x="1x" 1k="0" >Выбрать...</1s>\')),$.49(t[$(8).6()],7(e,a){$(\'1h[3="1w"]\').12($(\'<1s 1k="\'+e+\'" >\'+a.3+"</1s>"))})):($(\'1h[3="1w"]\').3l(),$(\'1h[3="1w"]\').12($(\'<1s 1x="1x" 1k="0" >Выбрать...</1s>\'))),e()});1c c=20,r=20,i=30,p=30,3s=30,l=16.19("3A"),o=16.19("3B"),s=16.19("3C"),d=16.19("3E");1G=[],$(".4e 5").1l(7(){$(8).1K(".11")?($(8).1J("11"),1G.1I(1G.1n($(8).1m().1o("1p")),1)):($(8).1F("11"),1G.1E($(8).1m().1o("1p"))),$(\'5[3="3I"]\').6(1G)});1c u=16.19("3L"),m=16.19("3x"),h=16.19("3h"),v=16.19("33");1D=[],$(".4g 5").1l(7(){$(8).1K(".11")?($(8).1J("11"),1D.1I(1D.1n($(8).1m().1o("1p")),1)):($(8).1F("11"),1D.1E($(8).1m().1o("1p"))),$(\'5[3="2W"]\').6(1D)});1c g=16.19("2U"),b=16.19("2R"),k=16.19("2P"),f=16.19("2N");1H=[],$(".3Y 5").1l(7(){$(8).1K(".11")?($(8).1J("11"),1H.1I(1H.1n($(8).1m().1o("1p")),1)):($(8).1F("11"),1H.1E($(8).1m().1o("1p"))),$(\'5[3="2M"]\').6(1H)});1c y=16.19("2X"),z=16.19("34"),C=16.19("39"),B=16.19("3a");1N=[],$(".4f 5").1l(7(){$(8).1K(".11")?($(8).1J("11"),1N.1I(1N.1n($(8).1m().1o("1p")),1)):($(8).1F("11"),1N.1E($(8).1m().1o("1p"))),$(\'5[3="3c"]\').6(1N)});1c I=16.19("3d"),M=16.19("3M"),E=16.19("3p"),x=16.19("3m");1L=[],$(".4d 5").1l(7(){$(8).1K(".11")?($(8).1J("11"),1L.1I(1L.1n($(8).1m().1o("1p")),1)):($(8).1F("11"),1L.1E($(8).1m().1o("1p"))),$(\'5[3="3y"]\').6(1L)}),$(".4b").1l(7(){1c e=$(8).1m().3f("5"),a=35(e.6())-1;1v a=1>a?1:a,e.6(a),e.13(),!1}),$(".4a").1l(7(){1c e=$(8).1m().3f("5");1v e.6(35(e.6())+1),e.13(),!1})});',62,286,'|||name||input|val|function|this|||||||||||||||||||||||||||||||||||||||||||||||||||||||checked|append|change|calc_data_banner|Math|document|round|disabled|getElementById|active|toggleClass|var|price_101_300|price_301_1000|price_1_100|price_1001|select|1e3|300|value|click|parent|indexOf|attr|class|price|edz|option|510|step|return|mat|selected|370|price_item|border_right|400|250|karm_pos|push|addClass|luv_pos|prov_pos|splice|removeClass|is|shnur_pos|border_left|obrez_pos|border_bottom|border_top|te|wid|Ce|Be|Ie|Me|ke|shnur_price_1|ce|luv_step||hei|de|ue|re|ge|be|oe|ve|option3_eyelets_price_1|ie|se|obrezka_price_1|prov_price_1|karm_price_1|bind|num|keyup|match|replace|karman_all|320|shnur_all|BlackOut|rez_all|350|provar_all|luv_all|450|itogo|BackLit|price_m|190|440|220|270|ye|ae|me|dpi|fe|text|ee|_e|Ee|pe|xe|175|provar_position|prov_bottom|180|prov_top|karm|prov_right|he|310|prov_left|230|karman_position|rez_left|260|225||if|isNaN|karm_bottom|rez_right|parseInt|1e6|240|le|rez_top|rez_bottom|200|rez_position|shnur_left|100|find|ze|karm_top|470|square|aper|empty|shnur_bottom|ne|330|shnur_top|Oe|430|_|luver_count|provar_count|420|rez_count|karm_right|shnur_position|shnur_count|eyelets_left|eyelets_right|eyelets_top|500|eyelets_bottom|karman_step|340|karmans_count|luversy_position|290|on|karm_left|shnur_right|ready|pow|else|227|price_items|1001|301|101|226|901|229|prov|580|581|188|902|903|904|905|520|906|579|each|plus|minus|237|shnur|eyelets|obrezka|karman|380|390|578|210|185|232|233|701|235|170|280|702|703|704|705|706|187|576|205|577|231'.split('|')))
</script>
<?if(!$_REQUEST['ajax']=='Y')
    die();?>