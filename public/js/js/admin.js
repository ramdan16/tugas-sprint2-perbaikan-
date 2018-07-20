$(".menu li >a").click(function(e) {
	$(".menu ul ul").slideUp(), $(this).next().is(":viseble")|| $(this).next().slideDown(),e.stopPropagation()
});