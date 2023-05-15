$(function(){

	// var readingText = $(".reading-story").text();
	
	// var bNum = (readingText.match( /<b>/g) || [] ).length;
	// readingText.replaceAll('<b>','<b class="reading-vocab-1>');
	// console.log(readingText.indexOf("<b>"));
	// readingText.replace('<b>headed</b>',$.parseHTML('<b>headed</b>'));

	// when loaded, loading page appears for a sec on content area
	setTimeout(function() {
		$('.indivisual-content-area').css("visibility","visible");
		$('.loading-gif').css("display","none");
	}, 1000);

	// change the class name
	var readingNum = $(".reading-text").length;
	for(var i = 1; i < readingNum+1; i++){
		var className = "reading-vocab-"+i;
		$(".reading-text").html($(".reading-text").text().replaceAll("<b>","<b class="+className+">"));
	}
	$(".vocabulary-content").html($(".vocabulary-content").text());
	// $(".question").html($(".question").text());
	
	// console.log((readingText.match( /<b>/g) || [] ).length);
	// console.log(readingText.indexOf("</b>"));
	// var textLength = readingText.indexOf("</b>") - readingText.indexOf("<b>");
	// console.log(readingText.substr(readingText.indexOf("<b>"), textLength + 4));

	// when loads page, put page num
	$(".page-num-area").remove();
	var pageNum = $(".page").length;
	for(var i = 1; i <= pageNum; i++){
		var targetAppendElem = $(".page").eq(i - 1);
		var appendNode = '<div class="page-num-area"><div class="page-num">' + i + '</div></div>';
		targetAppendElem.after(appendNode);
	}

	// when open menu pulldown, arrow rotates
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

	// when clicking checkbox, session dissapears or appears
	$('#vocabulary-1').click(function(){

		$('.vocabulary-1').children('.vocabulary-title').css('display','none');
		$('.vocabulary-1').children('.vocabulary-content').css('display','none');

		// put page num in each page
		$(".page-num-area").remove();
		var pageNum = $(".page").length;
		for(var i = 1; i <= pageNum; i++){
			var targetAppendElem = $(".page").eq(i - 1);
			var appendNode = '<div class="page-num-area"><div class="page-num">' + i + '</div></div>';
			targetAppendElem.after(appendNode);
		}
	});

	// when click reading slide checkbox, vocab in reading hides
	$('.hide-switch').click(function(){
		var eyeIcon = $(this).closest("div").children(".eye-icon");
		if(eyeIcon.attr("class").indexOf("slider-close") != -1){
			eyeIcon.removeClass("slider-close");
			$(".reading-vocab-1").css('display','');
			eyeIcon.addClass("slider-open");
			eyeIcon.remove("i");
			eyeIcon.html('<i class="fa fa-solid fa-eye"></i>');
			for(var i = 0; i < $(".reading-vocab-1").length; i++){
				$(".reading-vocab-1").eq(i).html(vocabs[i]);
				console.log(vocabs);
			}
		}else{
			eyeIcon.removeClass("slider-open");
			eyeIcon.addClass("slider-close");
			eyeIcon.remove("i");
			eyeIcon.html('<i class="fa fa-solid fa-eye-slash"></i>');
			$(".reading-vocab-1").each(function(index, element) {
				var space = "";
				for(var i = 0; i < element.textContent.length+3; i++){
					space += "&nbsp;";
				}
				for(var i = 0; i < $(".reading-vocab-1").length; i++){
					$(".reading-vocab-1").eq(i).html(space);
				}
			})
			$(".reading-vocab-1").css('text-decoration','underline');
		}
	});

	// if sentence too long, font size gets smaller
	for(var i = 0; i < $(".question-sentence").length; i++){
		if($(".question-sentence").eq(i).height() > 28.5){
			console.log($(".question-sentence").eq(i).height());
			$(".question-sentence").eq(i).css('font-size','18px');
		}
	}
	for(var i = 0; i < $(".practice-sentence").length; i++){
		if($(".practice-sentence").eq(i).height() > 28.5){
			console.log($(".practice-sentence").eq(i).height());
			$(".practice-sentence").eq(i).css('font-size','18px');
		}
	}
});