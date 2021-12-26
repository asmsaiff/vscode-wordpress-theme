$(".featured-posts-slider").slick({
	infinite: true,
	speed: 500,
	slidesToShow: 1,
	slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
	prevArrow:'<i class="fas fa-angle-left clr-gry bg-gray-500 px-3 py-1 text-white rounded-sm cursor-pointer"></i>',
    nextArrow:'<i class="fas fa-angle-right clr-gry bg-gray-500 px-3 py-1 text-white rounded-sm cursor-pointer"></i>',
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			},
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			},
		},
		{
			breakpoint: 520,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
	],
});