
	$('body').on('click ', function() {
		if (
			!$(this).closest('.parent-link').length &&
			$('.parent-link > ul').hasClass('menu-open')
		) {
			$('.parent-link > ul').removeClass('menu-open');
		}
	});

	$('.parent-link span').on('click',function(e) {
		e.stopPropagation();
		const submenu = $(this).closest('.parent-link').children('ul');
		$('.parent-link ul').removeClass('menu-open');
		submenu.addClass('menu-open');
		
	});
