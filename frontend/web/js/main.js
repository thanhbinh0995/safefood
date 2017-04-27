$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
});
$(document).on('click', '.panel-heading h4.clickable', function(e){
	window.location="news-content.html";
});
jQuery(document).ready(function() {
	var e = $(".portfolio-grid");
	e.isotope({
	    itemSelector: ".portfolio-item",
	    layoutMode: 'fitRows',
	    animationOptions: {
	        duration: 750,
	        easing: "linear",
	        queue: !1
	    }
	}), 
	$(".portfolio-filter").on("click", ".categories", function() {
	    var a = $(this).attr("data-filter");
	    e.isotope({
	        filter: a
	    })
	}), 
	$(".categories-filter").each(function(a, e) {
	    var i = $(e);
	    i.on("click", ".categories", function() {
	        i.find(".active").removeClass("active"), $(this).addClass("active")
	    })
	})
});


