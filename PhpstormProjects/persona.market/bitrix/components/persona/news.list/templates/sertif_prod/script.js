setTimeout(function(){
    $('.image a.detail_view').click(function(e){
        e.preventDefault();
        var src = $(this).data('detail');
        var pr = $(this).data('price');
        $('.sertif').removeClass('active');
        $(this).addClass('active');
        $('.sertif-detail').css({'backgroundImage': 'url("' + src + '")'});
        $('#cur_pr').text(pr)
    })
},2000)