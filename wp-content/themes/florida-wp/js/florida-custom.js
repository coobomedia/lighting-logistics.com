/* ---------------------------------------------------------------------- */
/*	Mega Menu
/* ---------------------------------------------------------------------- */ 

jQuery(document).ready(function(){

	var ul = jQuery('li.mega').find('ul');
	
	jQuery(ul).addClass('mega');

});

/*------------------------------------------------------------------------*/
/*		Navigation Current Menu
/*------------------------------------------------------------------------*/


jQuery(document).ready(function(){ 
		jQuery('#nav li.current-menu-item, #nav li.current_page_item, #side-nav li.current_page_item, #nav li.current-menu-ancestor, #nav li ul li ul li.current-menu-item').addClass('current');
		jQuery( '#nav li ul li:has(ul)' ).addClass('submenux');
});

/* ---------------------------------------------------------------------- */
/* Menu Responsive Switcher
/* ---------------------------------------------------------------------- */ 

jQuery(document).ready(function($){

	/* prepend menu icon */
	jQuery('#nav-wrap').prepend('<div id="menu-icon"><i class="icomoon-menu-6"></i> Menu - <span class="mn-clk">Navigation</span></div>');
	
	/* toggle nav */
	jQuery("#menu-icon").on("click", function(){
		jQuery("#nav").slideToggle();
		jQuery(this).toggleClass("active");
	});

});

/* ---------------------------------------------------------------------- */
/*	Windows Phone 8 and Device-Width + Menu fix
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function($){
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    );
    document.getElementsByTagName("head")[0].
        appendChild(msViewportStyle);
	jQuery('ul#nav').addClass('ie10mfx');
}
});


/* ---------------------------------------------------------------------- */
/*	doubleTapToGo
/* ---------------------------------------------------------------------- */


jQuery(document).ready(function($){
      var deviceAgent = navigator.userAgent.toLowerCase();
      var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
      if (agentID) {

     var width = jQuery(window).width();
	if (width > 768) {
		if(jQuery( '#nav li:has(ul)' ).length)
		{
			jQuery( '#nav li:has(ul)' ).doubleTapToGo();
		}
	}
 
   }
else {
	jQuery( '#nav li:has(ul)' ).doubleTapToGo();
}
});


/* ---------------------------------------------------------------------- */
/*	Accordion
/* ---------------------------------------------------------------------- */
	
	(function() {

		var $container = jQuery('.acc-container'),
			$trigger   = jQuery('.acc-trigger');

		$container.hide();
		$trigger.first().addClass('active').next().show();

		var fullWidth = $container.outerWidth(true);
		$trigger.css('width', fullWidth);
		$container.css('width', fullWidth);
		
		$trigger.on('click', function(e) {
			if( jQuery(this).next().is(':hidden') ) {
				$trigger.removeClass('active').next().slideUp(300);
				jQuery(this).toggleClass('active').next().slideDown(300);
			}
			e.preventDefault();
		});

		// Resize
		jQuery(window).on('resize', function() {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width() );
			$container.css('width', $container.parent().width() );
		});

	})();


/* ---------------------------------------------------------------------- */
/*	Scroll to top
/* ---------------------------------------------------------------------- */

  jQuery(document).ready(function(){ 
 
        jQuery(window).scroll(function(){
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.scrollup').fadeIn();
            } else {
                jQuery('.scrollup').fadeOut();
            }
        }); 
 
        jQuery('.scrollup').click(function(){
            jQuery("html, body").animate({ scrollTop: 0 }, 700);
            return false;
        });
 
    });
  
  
 


/* ---------------------------------------------------------------------- */
	/* Header search form
/* ---------------------------------------------------------------------- */
jQuery(document).ready(function(){
	
	jQuery('.search-text-box').click(function(){
		
		jQuery(this).animate({
		width:'140px',	
		},240,function(){
			jQuery('.search-text-box').delay(100).queue(function(next){
				jQuery('.search-text-box').css('color','#444');
				next();
			});
		});
		
	});
	
	jQuery(document).click(function(ev){
		
		var myID = ev.target.id;
		
		if(myID != 'search-box'){
			jQuery('.search-text-box').animate({
			width:'1px',
			
			},200,function(){
				
				
				jQuery('.search-text-box').css('color','transparent');
				
			
				
			});
		}
	});
	
});
		

/* ---------------------------------------------------------------------- */
/*		OurClient jCarousel Initialize
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function() {
	if(jQuery('#our-clients').length){
		jQuery('#our-clients').jcarousel();
	}
	
	if(jQuery('#latest-projects').length){
		jQuery('#latest-projects').jcarousel({
		scroll: 1
		});
	}
});	

/* ---------------------------------------------------------------------- */
/*		Pie Initialize
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function(){

	if(jQuery('.pie').length)
	{
		jQuery('.pie').easyPieChart({
			barColor:'#ff9900',
			trackColor: '#f2f2f2',
			scaleColor: false,
			lineWidth:20,
			animate: 1000,
			onStep: function(value) {
				this.$el.find('span').text(~~value+1);
			}
		});
	}

});	


/* ---------------------------------------------------------------------- */
/*		Progress Bar
/* ---------------------------------------------------------------------- */

initProgress('.progress');

function initProgress(el){
	jQuery(el).each(function(){
		var pData = jQuery(this).data('progress');
		progress(pData,jQuery(this));
	});
}


			
function progress(percent, $element) {
	var progressBarWidth = 0;
	
	(function myLoop (i,max) {
		progressBarWidth = i * $element.width() / 100;
		setTimeout(function () {   
		$element.find('div').find('small').html(i+'%');
		$element.find('div').width(progressBarWidth);
		if (++i<=max) myLoop(i,max);     
		}, 10)
	})(0,percent);  
}	

/* ---------------------------------------------------------------------- */
/*		Sticky Menu
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function(){
	var width = jQuery(window).width();
	if (width > 768) {
		if(jQuery("#sticker").length)
		{
			jQuery("#sticker").sticky({ topSpacing: 0, getWidthFrom: jQuery('#boxed-wrap')});
	}
	}
});

jQuery(window).scroll(function(){
	var width = jQuery(window).width();
	if (width < 768) {
		if(jQuery("#sticker").length)
		{
			jQuery("#sticker").css("position","relative"),
			jQuery(".is-sticky").css("position","relative"),
			jQuery(".is-sticky").css("height","auto");
		}		
	}
});




/* ---------------------------------------------------------------------- */
/*		FlexSlider
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function() {
      
	  if(jQuery('.flexslider').length){
		  jQuery('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}
		  });
	  }
});


/* ---------------------------------------------------------------------- */
/*		PrettyPhoto
/* ---------------------------------------------------------------------- */


jQuery(document).ready(function($){
    
	    /* --------- */
		/* Add PrettyPhoto */
		/* ------------------------ */
		
		var lightboxArgs = {			
						animation_speed: 'fast',
						overlay_gallery: true,
			autoplay_slideshow: false,
						slideshow: 5000, /* light_rounded / dark_rounded / light_square / dark_square / facebook */
									theme: 'pp_default', 
									opacity: 0.8,
						show_title: false,
			social_tools: "",			deeplinking: false,
			allow_resize: true, 			/* Resize the photos bigger than viewport. true/false */
			counter_separator_label: '/', 	/* The separator for the gallery counter 1 "of" 2 */
			default_width: 940,
			default_height: 529
		};

		if(jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').length){
			jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').prettyPhoto(lightboxArgs);
		}
		if(jQuery("a[rel^='prettyPhoto']").length){
			jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
		}
		
});


/* ---------------------------------------------------------------------- */
/*		Masonry
/* ---------------------------------------------------------------------- */


jQuery(window).load(function() {

	// Initialize Masonry
	if(jQuery('#pin-content').length){
		jQuery('#pin-content').masonry({
			itemSelector: '.pin-box',
		}).imagesLoaded(function() {
			jQuery('#pin-content').data('masonry');
		});
	}

});


/* ---------------------------------------------------------------------- */
/*  Parallax Sections
/* ---------------------------------------------------------------------- */

jQuery(document).ready(function(){
	// Cache the Window object
	$window = jQuery(window);
                
   jQuery('section[data-type="background"]').each(function(){
     var $bgobj = jQuery(this); // assigning the object
                    
      jQuery(window).scroll(function() {
                    
		// Scroll the background at var speed
		// the yPos is a negative value because we're scrolling it UP!								
		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$bgobj.css({ backgroundPosition: coords });
		
}); // window scroll Ends

 });	

}); 
/* 
 * Create HTML5 elements for IE's sake
 */

document.createElement("article");
document.createElement("section");