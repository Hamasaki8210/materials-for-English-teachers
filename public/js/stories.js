$(function(){
	$('.article-title').click(function(){
		// $(this).toggleClass('selected');
		console.log($(this).find(".article-title-pulldown-arrow").attr("class").indexOf("open"));
		if($(this).find(".article-title-pulldown-arrow").attr("class").indexOf("open") !== -1){
			$(this).find(".article-title-pulldown-arrow").removeClass("open");
			$(this).find(".article-title-pulldown-arrow").addClass("close");
		}else{
			$(this).find(".article-title-pulldown-arrow").addClass("open");
			$(this).find(".article-title-pulldown-arrow").removeClass("close");
		}

		$(this).next().slideToggle();
	});
});