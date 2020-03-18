$(document).ready(function(){
        if($('#slick').length){
            $('#slick').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1
            });
        }
    });