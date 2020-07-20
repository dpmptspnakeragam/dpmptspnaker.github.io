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
