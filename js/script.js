$( document ).ready(function(){
	$('.sub').click(function() {
		$(this).html("Loading <i class='fa fa-spinner fa-spin fa-3x fa-fw'></i>");
	});
	$(".close").on("click", function() {
	    $("#sidenav-overlay").trigger("click");
	    return false;
	});
	$(".button-collapse").sideNav();
	$('.mapwrap').click(function() {
		$(this).css('display', 'none');
	});
	$('.map').mouseleave(function() {
		$('.mapwrap').css('display', 'block');
	});
	$('.collapsible').collapsible({
	      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	    });
	 $(document).ready(function() {
	     $('#fullpage').fullpage();
	 });
	
	
	$( 'input' ).on( "click", function() {
	 var total = 0;
	 $("input:checked").each(function() {
	         total += parseInt($(this).val(), 0);
	     });
	  
	  
	  $( "#price" ).html(total);
	});
	
	
	
});
