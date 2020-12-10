// Gives real time preview in the customizer

jQuery( document ).ready(function($) {
	// Append the search icon list item to the main nav
   wp.customize('search_menu_icon', function(control) {
      control.bind(function( controlValue ) {
			if( controlValue == true ) {
				// If the switch is on, add the search icon
				$('.nav-menu').append('<li class="menu-item menu-item-search"><a href="#" class="nav-search"><i class="fa fa-search"></i></a></li>');
			}
			else {
				// If the switch is off, remove the search icon
				$('li.menu-item-search').remove();
			}
      });
   });

	// Change the font-size of the h1
	wp.customize('sample_slider_control', function(control) {
		control.bind(function( controlValue ) {
			$('h1').css('font-size', controlValue + 'px');
		});
	});


	wp.customize('header_bg_color', function(value)
	{
		value.bind(function( newval ){
			$('header').css('background', newval);
		});
	});

	wp.customize('HOBI_logo_options', function(value)
	{
		value.bind(function(newval){
			$('.site-logo').css('width', newval);
		});
	});


	wp.customize('blogname', function(value){
		value.bind(function(newval){
			$('.header-title a').html(newval);
		});
	});


	wp.customize('blogdescription', function(value){
		value.bind(function(newval){
			$('.site-description').html(newval);
		});
	});


	wp.customize('footer_bg_color', function(value)
	{
		value.bind(function(newval){
			$('footer').css('background', newval);
	});
	});


	wp.customize('HOBI_button1_text', function(value){
		value.bind(function(newval){
			$('#btn1').html(newval);
		});
	});

	wp.customize('HOBI_button2_text', function(value){
		value.bind(function(newval){
			$('#btn2').html(newval);
		});
	});

	wp.customize('header_button1_bg', function(value){
		value.bind(function(newval){
			$('#btn1').css('background', newval);
		});
	});

	wp.customize('header_button2_bg', function(value){
		value.bind(function(newval){
			$('#btn2').css('border-color', newval);
		});
	});
	wp.customize('header_button1_text_color', function(value){
		value.bind(function(newval){
			$('#btn1').css('color', newval);
		});
	});

	wp.customize('header_button2_text_color', function(value){
		value.bind(function(newval){
			$('#btn2').css('color', newval);
		});
	});
	
	wp.customize('HOBI_footer_text', function(value){
		value.bind(function(newval){
			$('.footer-text').html(newval);
		});
	});

	wp.customize('HERO_bg_color', function(value){
		value.bind(function(newval){
			$('.hero-container').css('background', newval);
		});
	});

	wp.customize('HOBI_hero_header_text', function(value){
		value.bind(function(newval){
			$('.hero-header-text').html(newval);
		});
	});

	wp.customize('HERO_Header_text_color', function(value){
		value.bind(function(newval){
			$('.hero-header-text').css('color', newval);
		});
	});

	wp.customize('HOBI_hero_subtitle_text', function(value){
		value.bind(function(newval){
			$('.hero-header-subtitle').html(newval);
		});
	});

	wp.customize('HERO_subtitle_text_color', function(value){
		value.bind(function(newval){
			$('.hero-header-subtitle').css('color', newval);
		});
	});

	wp.customize('hero_btn1_text', function(value){
		value.bind(function(newval){
			$('#hbtn1').html(newval);
		});
	});

	wp.customize('hero_btn2_text', function(value){
		value.bind(function(newval){
			$('#hbtn2').html(newval);
		});
	});
	wp.customize('hero_btn2_bg', function(value){
		value.bind(function(newval){
			$('#hbtn2').css('background', newval);
		});
	});

	wp.customize('hero_btn1_bg', function(value){
		value.bind(function(newval){
			$('#hbtn1').css('border-color', newval);
		});
	});

	wp.customize('hero_btn1_text_color', function(value){
		value.bind(function(newval){
			$('#hbtn1').css('color', newval);
		});
	});
	wp.customize('hero_btn2_text_color', function(value){
		value.bind(function(newval){
			$('#hbtn2').css('color', newval);
		});
	});
});



