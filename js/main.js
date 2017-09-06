$(document).ready(function () {
	
	var href = window.location.href;
	
	$('ul.navbar-nav').find('a').removeClass('active');
	$('ul.navbar-nav a').filter(function() {
		return this.href == href;
	}).addClass('active').parents('li').first('a').addClass('active');
});