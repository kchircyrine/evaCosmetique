// JavaScript Document

$(window).load(function(){
	
	// Fancyboxpopup
	$("a.fancyboxpopup").fancybox().each(function() {		
		$(this).append('<span class="viewfancypopup">&nbsp;</span>'); 
	});
	
	// Flexslider index banner
	$('#mainslider').flexslider({
        animation: "slide",		
        start: function(slider){
          $('body').removeClass('loading');
        }
   });
	// Flexslider Category banner  
	$('#catergoryslider').flexslider({
        animation: "slide",		
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
	 
	 // Flexslider Brand    
	$('#brand').flexslider({
        animation: "fade",		
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	// Flexslider Blog   
	$('#blogslider').flexslider({
        animation: "fade",		
        start: function(slider){
          $('body').removeClass('loading');
    }
      });

})


// Dropdown on Mouseover
$('document').ready(function(){
	
	$('.dropdown').hover(
		function(){
			$(this).addClass('open')
			
		},
		function(){			
			$(this).removeClass('open')
		}
		);
		
	// Product Thumb
	$('.mainimage li #wrap').hide()
	$('.mainimage li #wrap').eq(0).fadeIn()
	$('ul.mainimage li.producthtumb').click(function(){
		var thumbindex = $(this).index()		
		$('.mainimage li #wrap').fadeOut(0)
		$('.mainimage li #wrap').eq(thumbindex).fadeIn()
		 $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
	})
			
	// List & Grid View
	$('#list').click(function()
	{	$(this).addClass ('btn-success').children('i').addClass('icon-white')
		$('.grid').fadeOut()
		$('.list').fadeIn()
		$('#grid').removeClass ('btn-success').children('i').removeClass('icon-white')
	});
	$('#grid').click(function()
	{	$(this).addClass ('btn-success').children('i').addClass('icon-white')
		$('.list').fadeOut()
		$('.grid').fadeIn()
		$('#list').removeClass ('btn-success').children('i').removeClass('icon-white')
	});
			
	$('#myTab a:first').tab('show')
		$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
		
				
	})
	
// Checkout


$('.checkoutsteptitle').addClass('down').next('.checkoutstep').fadeIn()
	$('.checkoutsteptitle').live('click', function()
	{
		
	$("select, input:checkbox, input:radio, input:file").css('display', 'blcok');	
		$(this).toggleClass('down').next('.checkoutstep').slideToggle()
		
		
		});
		
		
				
	
	$('.clostalert').click(function()
	{
				
	$(this).parent('.alert').fadeOut ()
	});	
	});
	
	
// Category Menu mobile
 $("<select />").appendTo("nav.subnav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav.subnav select");
      
      // Populate dropdown with menu items
      $("nav.subnav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav.subnav select");
      });
      
	   // To make dropdown actually work
	   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav.subnav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	  
	
jQuery(function($){
       // Twitter
		 $("#twitter").tweet({
          join_text: "auto",
          username: "pxcreate", //replace this with your username
		  modpath: './twitter/',
          avatar_size: 32,
          count: 3,
          auto_join_text_default: "we said,",
          auto_join_text_ed: "we",
          auto_join_text_ing: "we were",
          auto_join_text_reply: "we replied",
          auto_join_text_url: "we were checking out",
          loading_text: "loading tweets..."
        });
      });	
	  
	  
		  
$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('#gotop').fadeIn(500);
		} else {
			$('#gotop').fadeOut(500);
		}
	});
			
	
	$('#gotop').click(function(){
		$('html, body').animate({scrollTop:0}, 2200);
	});  

	
 $('#cbox').jflickrfeed({
	limit: 8,
	qstrings: {
		id: '52617155@N08' //replace this with your ID
	},
	itemTemplate:
	'<li>' +
		'<a rel="flickrrel" href="{{image}}" title="{{title}}">' +
			'<img src="{{image_s}}" alt="{{title}}" />' +
		'</a>' +
	'</li>'
}, function(data) {
	$('#cbox a[rel=flickrrel]').fancybox();
	
});

	

$(document).ready(function() {	
	$(".contactform").validate({
   submitHandler: function(form) {
	   var name = $("input#name").val();
	   var email = $("input#email").val();
	   var url = $("input#url").val();
	   var message = $("textarea#message").val();
	   
	   var dataString = 'name='+ name + '&email=' + email + '&url=' + url+'&message='+message;
      $.ajax({
      type: "POST",
      url: "email.php",
      data: dataString,
      success: function() {
		  $('#contactmsg').remove();
		  $('.contactform').prepend("<div id='contactmsg' class='successmsg'>Form submitted successfully!</div>");
		   $('#contactmsg').delay(1500).fadeOut(500);
		 
		  $('#submit_id').attr('disabled','disabled');
		  
		 }
     });   
   return false;
   
   }
   
    
	
	
});

});

	  