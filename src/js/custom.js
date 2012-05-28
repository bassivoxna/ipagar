// JavaScript Document

//Cufon font replacement class/id

//bold font without text shadow
Cufon.replace('.title',{fontFamily: 'Open Sans Semibold'});

//bold font with text shadow
Cufon.replace('h1, h2, h3, p.style3',{fontFamily: 'Open Sans Semibold', textShadow: '0px 1px 0px #ffffff'});

//light font without text shadow
Cufon.replace('h5',{fontFamily: 'Open Sans'});

//light font with text shadow
Cufon.replace('h4',{fontFamily: 'Open Sans', textShadow: '0px 1px 0px #ffffff'});

//bold font with text shadow different that normal
Cufon.replace('.button_1 a, .button_2 a',{fontFamily: 'Open Sans Semibold', textShadow: '0px 1px 0px #ffdd3d'});


//Other functions required in template

$(document).ready(function(){

//Nivo slider
$('#slider').nivoSlider({
        effect:'random', // Specify sets like: 'fold,fade,sliceDown' or choose 'random' for mixed effects
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:5000, // How long each slide will show
		pauseOnHover:true,
       directionNav:true, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false // 1,2,3... navigation
	
});

//Fancybox for youtube video
$(".youtube").click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'overlayShow': true,
			'overlayColor': '#000000',
			'overlayOpacity': 0.9,
			'hideOnOverlayClick': true, 
			'transitionIn'		:'elastic',
			'speedIn'			:600,
			'title'			: this.title,
			'width'			: 600,
			'height'		: 400,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});
		return false;
});

//Fancybox for vimeo video
$(".vimeo").click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'overlayShow': true,
			'overlayColor': '#000000',
			'overlayOpacity': 0.9,
			'hideOnOverlayClick': true, 
			'transitionIn'		:'elastic',
			'speedIn'			:600,
			'title'			: this.title,
			'width'			: 600,
			'height'		: 400,
			'href'          : this.href.replace(new RegExp("([0-9])","i"),'moogaloop.swf?clip_id=$1'),
			'type'			: 'swf',
			'swf'			: {
			'wmode'				: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});
		return false;
});

//Fancybox for image gallery
$("a[rel=next]").fancybox({
		'opacity'		: true,
		'overlayShow'	       : true,
		'overlayColor': '#000000',
		'overlayOpacity'     : 0.9,
		'titleShow':true,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
});

//Cycle plugin for testimonial
$('.testimonial').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, scrollLeft etc... 
   		speed: 1000,
		timeout: 4000,  // milliseconds between slide transitions (0 to disable auto advance)
		cleartypeNoBg:   true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		pause:  1
});

//Subscribe form
$(function() {
		var v = $("#subform").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					target: "#result_sub",
					clearForm: true
				});
			}
		});
});	

//Contact form
$(function() {
		var v = $("#form").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					target: "#result",
					clearForm: true
				});
			}
		});
		
});	

//On Hover Event for gallery zoom image
$('ul.gallery li img').hover(function(){
			$(this).animate({opacity: 0.6}, 300);
		}, function () {
			$(this).animate({opacity: 1}, 300);
});

}); // close document.ready

//twitter id and tweet count can be changed here
<!--
	getTwitters('twitter', {
        id: 'envato', 
        count: 2, 
        enableLinks: true, 
        template: '<a href="http://twitter.com/envato"><span style="color:#000000">@angeled ~ </span></a><span class="twitterPrefix"><span class="twitterStatus">%text%</span> <span class="username"><a href="http://twitter.com/%user_screen_name%"><br/></span>',
        newwindow: true
});
-->