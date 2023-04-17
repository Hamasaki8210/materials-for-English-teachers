$(function()
{
    $('.overlap-3rd').hover(
        function() {
            $('.overlap-3rd').css('z-index','1');
            $('.overlap-4rd').css('z-index','0');
        },
        function() {
            $('.overlap-4rd').css('z-index','1');
            $('.overlap-3rd').css('z-index','0');
        }
    );
    $('.overlap-4th').hover(
        function() {
            $('.overlap-3rd').css('z-index','0');
            $('.overlap-4rd').css('z-index','1');
        },
        function() {
            $('.overlap-4rd').css('z-index','0');
            $('.overlap-3rd').css('z-index','1');
        }
    );
})