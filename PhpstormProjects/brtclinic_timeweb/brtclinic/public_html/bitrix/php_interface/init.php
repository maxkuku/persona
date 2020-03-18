<? // /home/c/c41821/brtclinic/public_html
function pr($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

function bottom_adv(){
    $r = '
<style>
.foot_adv{
    padding: 40px 0 10%;
}
.foot_adv center{
    position:relative;
}
.foot_adv h2 {
    color: white;
    font-size: 36px;
}
.foot_adv p{
    color:white;
}
.foot_adv label span{
    color:yellow;
    display:block;
    text-align: left;
    font-size: 16px;
    margin-bottom: 10px;
}
.foot_adv form{
    display: block;
    position: absolute;
    left:50%;
    transform:translateX(-50%);
    margin-top: 30px;
    color: yellow;
}
.foot_adv input#phone_inp,
.foot_adv input#phone_send {
    padding: 10px 30px;
    border: 3px solid #fff;
    border-radius: 40px;
}
input#phone_send:hover {
    box-shadow: inset 2px 2px 2px #333;
}
.foot_adv input#phone_inp.error {
    border: 3px solid #ff0000;
}
@media(max-width:768px){
    .foot_adv {
        padding: 10px 10px 56%;
    }
    .foot_adv input#phone_inp {
        margin-bottom: 16px;
    }
}
</style>
<div class="foot_adv" style="background-color: #359DA6">
<center>
<h2>Записаться на прием к неврологу</h2>
    <p>Скидка 50% на 1-е занятие (90 минут). Цена по скидке 2750 руб.</p>
    <p>Бесплатный прием невролога при прохождении 1-го занятия.</p>
    <form id="bottom">
        <label for="phone_inp"><span>Введите номер телефона</span>
            <input type="tel" name="phone_inp" id="phone_inp" value="+7" placeholder="(999) 999-99-99" />
            <input type="hidden" name="adr" value="'.$_SERVER['PHP_SELF'].'" />
        </label>
            <input type="submit" name="phone_send" id="phone_send" value="Заказать звонок" style="background-color: #CE3A12; color:white" />
    </form>
</center>
</div>';

    return $r;
}
?>