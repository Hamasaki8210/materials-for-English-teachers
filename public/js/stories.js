$(function(){

	$('[data-toggle="tooltip"]').tooltip();

	// $(".test").append($(".story-page").html());
	// when loaded, loading page appears for a sec on content area
	setTimeout(function() {
		$('.indivisual-content-area').css("visibility","visible");
		$('.loading-gif').css("display","none");
	}, 1000);

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
		var idName = $(this).attr("id");
		var idNameDot = "." + idName;
		// variable for the check whether reading or vocabulary title exists
		var vocabPart = ($(idNameDot).find('.vocabulary-title').text()!="") ? true : false;
		var readingPart = ($(idNameDot).find('.reading-title').text()!="") ? true : false;
		// vocab part
		if(vocabPart || readingPart){
			// retrieve before and after "-"
			var sessionName = idName.match(/(.*?)-/)[1];
			var articleNum = idName.match(/-(.*)/)[1];
			var readingClassName = ".reading-" + articleNum;
			var vocabularyClassName = ".vocabulary-" + articleNum;
			var sessionAreaClassName = "." + sessionName + "-area";
			// if the operated checkbox is reading part
			if(sessionName === "reading"){
				if($(vocabularyClassName).attr("class").indexOf("show")!=-1){
					// if vocab visible and reading hiding, display none
					if($(idNameDot).attr("class").indexOf("show")!=-1){
						$(idNameDot).css('display','none');
						$(idNameDot).addClass("hide");
						$(idNameDot).removeClass("show");
					// if vocab part visible and reading showing, display block
					}else{
						$(idNameDot).css('display','block');
						$(idNameDot).addClass("show");
						$(idNameDot).removeClass("hide");
					}
				}else if($(vocabularyClassName).attr("class").indexOf("hide")!=-1){
					// if vocab invisible and reading hiding, display none
					if($(idNameDot).attr("class").indexOf("show")!=-1){
						$(idNameDot).css('display','none');
						$(idNameDot).addClass("hide");
						$(idNameDot).removeClass("show");
						// the page hides
						$(idNameDot).parent().css('display','none');
					// if vocab invisible and reading showing, display block
					}else{
						// if both reading and vocab are not showing, show the page first
						if($(idNameDot).parent().css('display') === "none"){
							$(idNameDot).parent().css('display','block');
						}
						$(idNameDot).css('display','block');
						$(idNameDot).addClass("show");
						$(idNameDot).removeClass("hide");
					}
				}
			// if the operated checkbox is vocab part
			}else if(sessionName === "vocabulary"){
				// if reading part visible, the frame of vocab remains
				if($(readingClassName).attr("class").indexOf("show")!=-1){
					if($(idNameDot).attr("class").indexOf("show")!=-1){
						$(idNameDot).find(sessionAreaClassName).css('visibility','hidden');
						$(idNameDot).addClass("hide");
						$(idNameDot).removeClass("show");
					}else{
						$(idNameDot).find(sessionAreaClassName).css('visibility','visible');
						$(idNameDot).addClass("show");
						$(idNameDot).removeClass("hide");
					}
				}else if($(readingClassName).attr("class").indexOf("hide")!=-1){
					if($(idNameDot).attr("class").indexOf("show")!=-1){
						$(idNameDot).find(sessionAreaClassName).css('visibility','hidden');
						$(idNameDot).addClass("hide");
						$(idNameDot).removeClass("show");
						// the page hides
						$(idNameDot).parent().css('display','none');
					}else{
						// if both reading and vocab are not showing, show the page first
						if($(idNameDot).parent().css('display') === "none"){
							$(idNameDot).parent().css('display','block');
						}
						$(idNameDot).find(sessionAreaClassName).css('visibility','visible');
						$(idNameDot).addClass("show");
						$(idNameDot).removeClass("hide");
					}
				}
			}
		// when questions, practice, answers, hide or show whole page
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
		var idNameDot = "." + $(this).attr("id");
		var idNameSharp = "#" + $(this).attr("id");
		var eyeIcon = $(idNameSharp).parent().parent().children('.eye-icon');
		if($(idNameDot).attr("class").indexOf("hide") != -1){
			$(idNameDot).removeClass("hide");
			$(idNameDot).addClass("show");
			$(idNameDot).css('visibility','visible');
			$(idNameDot).closest('span').css('border-bottom','none');
			eyeIcon.remove("i");
			eyeIcon.html('<i class="fa fa-solid fa-eye"></i>');
		}else{
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
});

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
};

$(function(){
    $('.pdf-dl-icon').click(function() {
		var data = '';
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type:'GET',
            url:'/for_teachers/test2',
			data: data,
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response){
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "techsolutionstuff.pdf";
                link.click();
            },
            error: function(blob){
                console.log(blob);
            }
        });
    })
});

$(function(){
    $('.pv-icon').click(function() {
		var data = {
			name: '0',
			email: '0'
		};

		$.ajax({
			url: '/for_teachers/changeVisibilityStatus',
			type: 'GET',
			data: data,
			success: function(response) {
				console.log("OK");
			},
			error: function(xhr, status, error) {
				console.error("NG");
			}
		});
	})
});