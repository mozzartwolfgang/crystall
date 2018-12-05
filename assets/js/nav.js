//QUERY UNTUK BACKGROUND HEADER SAAT DI SCROLL
$(window).scroll(function(){
 		if($(window).scrollTop() >= 100){
 			$(".nav").addClass('head-kebawah');
 			$(".navbar-brand").removeClass('.brand');
 			$(".navbar-brand").addClass('.brand-turun');
 			$(".nav").removeClass('head-keatas');
 			
 		}else{
 			$(".nav").removeClass('head-kebawah');
 			$(".navbar-brand").removeClass('brand-turun');
 			$(".navbar-brand").addClass('brand');
 			$(".nav").addClass('head-keatas');
 		}
 	});



//QUERY UNTUK RESPONSIVE
$(document).ready(function(){
	if($(document).width() <= 800) // JIKA LAYAR CLIENT DIBAWAH 800
	{
		turun();
		atas();
		$("#atas").removeClass("glyphicon glyphicon-eject");
		$("span").removeClass("#atas");
	}

});

$(window).resize(function(){
	if ($(window).width() <= 800)
	{
		turun();
		atas();
		$("#atas").removeClass("glyphicon glyphicon-eject");
		$("span").removeClass("#atas");
	}else{
	}
});



//FUNCTION UNTUK TOMBOL NAIK BAWAH 
function turun(){
	$(".btn-turun").click(function(){
			$("#navigasi").removeClass("haha");
			$("#navigasi").addClass("hehe");
			$("#navigasi").addClass("fadeInOut");

		$("#atas").addClass("glyphicon glyphicon-eject");
		$("#atas").css({"display" : "block", "font-size" : "20px"});
		});
}
function atas(){

		// jika tombol atas di klik
		$("#atas").click(function(){

			$("#atas").removeClass("glyphicon glyphicon-eject");
			$("#navigasi").removeClass("hehe");
			$("#navigasi").addClass("haha");
			
		});
}


