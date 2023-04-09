$(function(){
    // $('.js-modal-open').hover(function(){
    //     $('.js-modal').fadeIn();
    //     return false;
    // });
    var timer = "";
    var count = 0;
    $('.js-modal-open').mouseover(
        function(){
            $(this).addClass('opening');
            console.log($(this).attr('class'));
            timer = setInterval(function(){
                    count++;
                    if(count === 4){
                        console.log(count);
                        count = 0;
                        clearInterval(timer);
                        $('.js-modal').fadeIn();
                        return false;
                    }
                },100
            );
            $(this).off('click');
        }
    ).mouseout(
        function(){
            count = 0;
            clearInterval(timer);
        }
    )
    // $('.js-modal-open').on('click',function(){
    //     $('.js-modal').fadeIn();
    //     return false;
    // });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        count = 0;
        clearInterval(timer);
        return false;
    });
});