// JavaScript Document
$('.accordian').on('click', '.accordian-control', function(e){
	e.preventDefault();
	$(this)
	.next('.accordian-panel')
	.not(':animated')
	.slideToggle();
});