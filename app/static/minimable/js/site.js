jQuery(document).ready(function($) {
	$('.section-page').last().addClass('last-section');	
	$(".swipebox").swipebox( {
		hideBarsDelay : 0
	});
  $(".nav-tabs li").click(function() {
    $('.nav-tabs li').removeClass("active"); 
    $(this).addClass("active");
    $(".tab-pane").hide(); 

    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
});
  var ismobile=navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i);
  if( (!ismobile )) {
    $('.full-home').css('height', window.innerHeight+'px');
    $(window).resize(function() {
      $('.full-home').css('height', window.innerHeight+'px');
    });
  }
  if (!$('html').hasClass('ie8')) {
    $("body").queryLoader2({
        percentage        : true,
        barHeight         : 5,
        minimumTime       : 1000,
        barColor          : "#000000",
        backgroundColor   : "#ffffff",
        onComplete: function() {
          TweenMax.to( $('#menu-top'), 1, {css:{top:0,opacity:1}});
      }
  });
}
jQuery(window).load(function(){
    $('#prepage').fadeOut().remove();
  });
});
//navigation
var lastId,
topMenu = $(".top-nav"),
scrollDown = $(".scroll-down"),
topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).parent().not('.custom-link,.sub-menu li').children().attr("href"));
      if (item.length) { return item; }
  });

// Bind click handler to menu items
var homeSection = $('.home-section');
if(homeSection.length) {
  var id = $('.home-section').attr('id');
  $('#mini-logo a').attr("href","#"+id);
}

menuItems.add(scrollDown).click(function(e){
  var href = this.hash,
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+window.topOffset;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, window.speed, 'easeInOutExpo');
  e.preventDefault();
});
$('.home-link a,#mini-logo a').add(scrollDown).click(function(e) {
  var href = this.hash,
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+window.topOffset;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, window.speed, 'easeInOutExpo');
  e.preventDefault();
});
var homeBubble = $('#nav-home li').each(function() {
    if (!$(this).hasClass('custom-link')) {
      $('#nav-home a').add(scrollDown).click(function(e){
        var href = this.hash,
        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+window.topOffset;
        $('html, body').stop().animate({ 
            scrollTop: offsetTop
        }, window.speed, 'easeInOutExpo');
        e.preventDefault();
    });
  }
  return this;
});

var ismobile=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i);
if( (ismobile)) {
	$('.nav-collapse a').click(function(e) {
		$('.nav-collapse').slideUp(400, function () {
			$('.nav-collapse').css('height','0');
			$('.btn-navbar').click(function() {
				$('.nav-collapse').addClass('menu-height');
				$('.nav-collapse').slideDown(400);
			});
		});
	});
}


var stickyHeaderTop = 500;
// Bind to scroll
$(window).bind('scroll', function() {
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
   if( jQuery(window).scrollTop() > stickyHeaderTop && $("#menu-top").hasClass('hide-menu')) {
        jQuery('.hide-menu').fadeIn();
    } else {
        jQuery('.hide-menu').fadeOut();
    }
});