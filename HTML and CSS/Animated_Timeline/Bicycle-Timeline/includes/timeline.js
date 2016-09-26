/*  JavaScript Document                      */

var timelineWidth = 0;
var panelWidth = 0;
var firstRun = true;
var totalPanels = 0;
var currentPanel = 0;

$(document).ready(function(){
	"use strict";
	panelWidth = $('.timeline .panel').width();
	timelineWidth = $('.timeline').width();
	totalPanels = $('.timeline .panel').length;
	adjustLayout();
	SetInterval(checkWindowSize, 1000);
});

function adjustLayout(){
	"use strict";
	$('.timeline .panel').each(function(index){
		var newX = panelWidth * index;
		$(this).css('left',newX+'px');
		
		var newLabel = $(this).find('.label').html();
		$('.timeline nav').append('<a href="#">'+newLabel+'</a>');  //Adds anchor link to each individual panel
		});
		
		currentPanel = $('.timeline nav a:last-child()').index();
		activateNavigation();
}

function activateNavigation(){
	"use strict";
	$('.timeline nav a').on('click',function(){
		currentPanel = $(this).index();
		timelineWidth = $('.timeline').width();
		
		
		$('.timeline nav a').removeClass('selected');
		$(this).addClass('selected');                    //When clicked on Navigation item the selected class is removed and selected class is added back on
		
		var timelineOffset = (timelineWidth-panelWidth) * 0.5; //Takes the Timeline width and substract out panel width to allow panels to show in middle of display
		var newPosition = ((currentPanel*panelWidth) * -1) + timelineOffset;
		
		$('.panel_slider').animate({left:newPosition+'px'}, 1000);
		
		var backgroundWidth = $('.timeline .background_slider img').width();
		var moveAmount = (backgroundWidth - timelineWidth) / totalPanels;
		if(currentPanel != 0){
			var multiplier = currentPanel + 1;
		}else{
			var multiplier = 0;	
		}
		
		var newBackgroundPosition = (moveAmount * mutliplier) * -1;
		$('.background_slider img.background').animate({left:newBackgroundPosition+'px'},1000);
	});
	
}

function checkWindowSize(){

var newTimelineWidth = $('.timeline').width();

if(newTimelineWidth > 500 && timelineWidth > 500 ){
	//do nothing
	
}else if(newTimelineWidth <500 && timelineWidth <500 ){
	//do nothing
}else{
	if(newTimelineWidth > 500 && timelineWidth < 500 ){
		firstRun = true;
	}
}

timelineWidth = newTimelineWidth;

if( firstRun == true){
	
	$('.timeline nav a:nth-child('+(currentPanel+1)+')').trigger('click');
	firstRun = false;
	}	
	
}