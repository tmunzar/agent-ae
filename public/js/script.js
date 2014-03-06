window.mySwipe = new Swipe(document.getElementById('morning-minute-slider'), {
  startSlide: 0,
  speed: 400,
  auto: 3000,
  continuous: true,
  disableScroll: false,
  stopPropagation: false,
  callback: function(index, elem) {
	},
});


$(document).ready(function () {
	$('.toggle-login').click(function () {
		$('#top-drop').toggleClass('active');
	});
});