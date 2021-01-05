$(".page-scroll").on("click", function (e) {
	var tujuan = $(this).attr("href");

	var elemenTujuan = $(tujuan);

	$("html, body").animate(
		{
			scrollTop: elemenTujuan.offset().top - 55,
		},
		0,
		"easeInOutExpo"
	);

	e.preventDefault();
});


// parallax 
$(window).on('load', function(){
	$('.jumbotronimg').addClass('muncul');
	$('.jumbotronteks').addClass('muncul');
});


$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px,'+ wScroll/8 +'%)'
	});

	$('.jumbotron h3').css({
		'transform' : 'translate(0px,'+ wScroll/4 +'%)'
	});

	$('.jumbotron h4').css({
		'transform' : 'translate(0px,'+ wScroll/4 +'%)'
	});

	$('.jumbotron h5').css({
		'transform' : 'translate(0px,'+ wScroll/4 +'%)'
	});

	if(wScroll > $('#profil').offset().top - 57){
		$('.pilih-profil, .slogan').each(function(i){
			setTimeout(function(){
				$('.pilih-profil, .slogan').eq(i).addClass('muncul');
			}, 100 * (i+1));
		});
	}

	if(wScroll > $('#pelayanan').offset().top - 57){
		$('.pilih-pelayanan, .isi-pelayanan').each(function(i){
			setTimeout(function(){
				$('.pilih-pelayanan, .isi-pelayanan').eq(i).addClass('muncul');
			}, 100 * (i+1));
		});
	}

	if(wScroll > $('#investasi').offset().top - 57){
		$('.pilih-investasi, .peta-investasi, .penjelasan-investasi').each(function(i){
			setTimeout(function(){
				$('.pilih-investasi, .peta-investasi, .penjelasan-investasi').eq(i).addClass('muncul');
			}, 100 * (i+1));
		});
	}

	if(wScroll > $('#naker').offset().top - 57){
		$('.pilih-naker, .logo-enaker, .isi-naker').each(function(i){
			setTimeout(function(){
				$('.pilih-naker, .logo-enaker, .isi-naker').eq(i).addClass('muncul');
			}, 100 * (i+1));
		});
	}

	if(wScroll > $('#pengaduan').offset().top - 57){
		$('.mekanisme-pengaduan, .form-pengaduan').each(function(i){
			setTimeout(function(){
				$('.mekanisme-pengaduan, .form-pengaduan').eq(i).addClass('muncul');
			}, 100 * (i+1));
		});
	}

});

// close parallax