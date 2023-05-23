$(function(){

	$('[data-toggle="tooltip"]').tooltip();

	// $(".test").append($(".story-page").html());
	// when loaded, loading page appears for a sec on content area
	setTimeout(function() {
		$('.indivisual-content-area').css("visibility","visible");
		$('.loading-gif').css("display","none");
	}, 1000);

	// when loading page, make dom and add class name
	changeTextToDom();

	// when loading page, put page num
	changePageNums();

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
	$('.menu-sessions').click(function(){
		var idNameDot = "." + $(this).attr("id");
		var vocabPart = ($(idNameDot).children('.vocabulary-title').text()!="") ? true : false;
		// vocab part
		if(vocabPart){
			// if showing, hide or show
			if($(idNameDot).attr("class").indexOf("show")!=-1){
				$(idNameDot).children('.vocabulary-title').css('visibility','hidden');
				$(idNameDot).children('.vocabulary-content').css('visibility','hidden');
				$(idNameDot).addClass("hide");
				$(idNameDot).removeClass("show");
			}else{
				$(idNameDot).children('.vocabulary-title').css('visibility','visible');
				$(idNameDot).children('.vocabulary-content').css('visibility','visible');
				$(idNameDot).addClass("show");
				$(idNameDot).removeClass("hide");
			}
		// questions, practice, answers
		}else{
			if($(idNameDot).attr("class").indexOf("show")!=-1){
				$(idNameDot).parent().css('display','none');
				$(idNameDot).addClass("hide");
				$(idNameDot).removeClass("show");
			}else{
				$(idNameDot).parent().css('display','block');
				$(idNameDot).addClass("show");
				$(idNameDot).removeClass("hide");
			}
		}
		changePageNums();
	});


	// when click reading slide checkbox, vocab in reading hides
	$('.hide-switch').click(function(){
		// var eyeIcon = $(this).closest("div").children(".eye-icon");
		var idNameDot = "." + $(this).attr("id");
		var idNameSharp = "#" + $(this).attr("id");
		var eyeIcon = $(idNameSharp).parent().parent().children('eye-icon');
		if($(idNameDot).attr("class").indexOf("hide") != -1){
			$(idNameDot).removeClass("hide");
			$(idNameDot).addClass("show");
			$(idNameDot).css('visibility','visible');
			$(idNameDot).closest('span').css('border-bottom','none');
			eyeIcon.remove("i");
			eyeIcon.html('<i class="fa fa-solid fa-eye"></i>');
		}else{
			// eyeIcon.removeClass("slider-open");
			// eyeIcon.addClass("slider-close");
			// eyeIcon.remove("i");
			// eyeIcon.html('<i class="fa fa-solid fa-eye-slash"></i>');
			// $(".reading-vocab-1").css('visibility','hidden');
			// $(".reading-vocab-1").closest('span').css('border-bottom','solid 1px');
			$(idNameDot).removeClass("show");
			$(idNameDot).addClass("hide");
			$(idNameDot).css('visibility','hidden');
			$(idNameDot).closest('span').css('border-bottom','solid 1px');
			eyeIcon.remove("i");
			eyeIcon.html('<i class="fa fa-solid fa-eye-slash"></i>');
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

	// change text to dom of database data
	function changeTextToDom(){
		// reading
		var readingClassNum = $(".reading-text").length;
		for(var i = 0; i < readingClassNum; i++){
			// add class name
			var readingText = $(".reading-text").eq(i).text();
			var readingClassName = "reading-" + i;
			var readingClassNameDot = "." + readingClassName;
			$(".reading-text").eq(i).addClass(readingClassName);
			// replace <b> to <b class="reading-vocab-[number]">
			var readingVocabClassName = "reading-vocab-" + i;
			var readingVocabClassNameTag = "<b class='" + readingVocabClassName + "'>";
			var displayReading = readingText.replaceAll("<b>", readingVocabClassNameTag);
			$(readingClassNameDot).text(displayReading)
			// change text to dom
			$(readingClassNameDot).html($(readingClassNameDot).text());
		}
		// vocabulary
		var vocabClassNum = $(".vocabulary-content").length;
		for(var i = 0; i < vocabClassNum; i++){
			var vocabClassName = "vocabulary-content-" + i;
			var vocabClassNameDot = "." + vocabClassName;
			var parentVocabClassName = "vocabulary-" + i;
			$(".vocabulary-content").eq(i).addClass(vocabClassName);
			$(vocabClassNameDot).html($(vocabClassNameDot).text());
			$(".vocabulary-content").eq(i).parent("div").addClass(parentVocabClassName);
		}
		// question
		var questionClassNum = $(".questions-area").length;
		for(var i = 0; i < questionClassNum; i++){
			var questionClassName = "questions-" + i;
			var questionClassNameDot = "." + questionClassName;
			$(".questions-area").eq(i).addClass(questionClassName);
			$(questionClassNameDot).html($(questionClassNameDot).text());
		}
		// practice
		var practiceClassNum = $(".practice-area").length;
		for(var i = 0; i < practiceClassNum; i++){
			var practiceClassName = "practice-" + i;
			var practiceClassNameDot = "." + practiceClassName;
			$(".practice-area").eq(i).addClass(practiceClassName);
			$(practiceClassNameDot).html($(practiceClassNameDot).text());
		}
		// answer
		var answerClassNum = $(".answers-area").length;
		for(var i = 0; i < answerClassNum; i++){
			var answerClassName = "answers-" + i;
			var answerClassNameDot = "." + answerClassName;
			$(".answers-area").eq(i).addClass(answerClassName);
			$(answerClassNameDot).html($(answerClassNameDot).text());
		}
	}

	function changePageNums(){
		$(".page-num-area").remove();
		var pageNum = $('.page').length;
		var appendPageNum = 1;
		for(var i = 0; i < pageNum; i++){
			if($('.page').eq(i).css('display') === 'block'){
				var targetAppendElem = $(".page").eq(i);
				var appendNode = '<div class="page-num-area"><div class="page-num">' + appendPageNum + '</div></div>';
				targetAppendElem.after(appendNode);
				appendPageNum++;
			}
		}
	}
});


// $(function(){
//     $('.button').click(function() {
//         var id = 1;
//         $.ajax({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//             type:'GET',
//             url:'/for_teachers/test2', 
//             dataType: 'json',
//         }).done(function (results){
// 			console.log("OK");
//         }).fail(function(jqXHR, textStatus, errorThrown){
// 			console.log("NG");
//         }).always(function() {
//         });
//     })
// });