function filtrarCategoria() {

	$('.categoria-item').on('click', function(e) {
		e.preventDefault();

		$('.categoria-item').removeClass('active');
		$(this).addClass('active');

		if ($(this).data('id') == 'all') {
			$('.portfolio-item').show();
			return false;
		}

		$('.portfolio-item').hide();
		$('.portfolio-' + $(this).data('id')).show();
	});
}

$(document).ready(function() {
	filtrarCategoria();
});