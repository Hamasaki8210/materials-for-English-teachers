$(function(){
	$('.menu-title').click(function(){
		console.log($(this).find(".menu-title-pulldown-arrow").attr("class").indexOf("open"));
		if($(this).find(".menu-title-pulldown-arrow").attr("class").indexOf("open") !== -1){
			$(this).find(".menu-title-pulldown-arrow").removeClass("open");
			$(this).find(".menu-title-pulldown-arrow").addClass("close");
		}else{
			$(this).find(".menu-title-pulldown-arrow").addClass("open");
			$(this).find(".menu-title-pulldown-arrow").removeClass("close");
		}
		$(this).next().slideToggle();
	});

	$('#checkbox-2').click(function(){
		$('.vocabulary').closest('div').remove();
	});
});