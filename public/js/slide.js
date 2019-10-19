$(document).ready(function(){
	var stt = 0;
	$("img.slide").each(function(){
		if($(this).is(':visible'))
			stt = $(this).attr("stt");
		});
	$("#next").click(function(){
		console.log(stt);
		if(stt >= $("img.slide").length ) {
			stt = 0;
		}
		next = stt++;
		
		$("img.slide").hide();
		$("img.slide").eq(next).show();
	});
	$("#prev").click(function(){
		console.log(stt);
		if(stt >= $("img.slide").length ) {
			stt = 0;
			prev = stt++;
		}
		prev = --stt;
		
		$("img.slide").hide();
		$("img.slide").eq(prev).show();
	});
	setInterval(function(){
		$("#next").click()
	},2500);
});