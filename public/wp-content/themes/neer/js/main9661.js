(function($){
"use strict";
/*------------------------------------------------------------------
[Table of contents]

1. Get URL Parameter
2. Isotope Resize Func
3. Isotope for Archive and Search Page
4. Slider Preloader
5. Equal Height blog
6. Sticky Menu
7. Shop Isotope
8. Search box fix
9. Magnific popup
10. Load More masonary
11. Price Filter
12. Orderby Filter
13. Shop Product Load more
14. Remove Container Class
15. Add product gallery classes
16. Account page customization

-------------------------------------------------------------------*/
	jQuery.fn.exists = function(){return this.length>0;}

	/* =================================================================---------------------------------------
	1. Get URL Parameter
	---------------------------------------------==========================================================*/
	var getUrlParameter = function getUrlParameter(sParam) {
	    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : sParameterName[1];
	        }
	    }
	};

	function neer_mobile_menu(){
		if($(window).width() <= 1024){
			var $elm = jQuery('.neer_header_menu_default, ul#menu-main-menu');
			if ( $('.neer-main-menu-section').find('.menu-collapser').length == 0 ) {
				jQuery('.neer_header_menu_default, ul#menu-main-menu').slimmenu(
				{
				    resizeWidth: '1024',
				    collapserTitle: '',
				    animSpeed: 'medium',
				    easingEffect: null,
				    indentChildren: false,
				    backToNormal: true,
				    childrenIndenter: '&nbsp;'
				});
			}
		}
	}

	function ussWindowResize(){
		jQuery(window).trigger('resize');
		window.dispatchEvent(new Event('resize'));
		var evt = window.document.createEvent('UIEvents'); 
		evt.initUIEvent('resize', true, false, window, 0); 
		window.dispatchEvent(evt);
	}

	

	/* =================================================================---------------------------------------
	2. Isotope Resize Func
	---------------------------------------------==========================================================*/
	$(window).on('load', function(){

		// AddClass if vc composer not exists
		if( $('body').find('.vc_row').length == 0 ) {
			$('body').addClass('neer-js-composer-not-exist');
		} else {
			$('.vc_row').each(function(){
				$(this).prev('p').find('style').parent('p').css('margin', '0');
			});
		}

		$('body').addClass('neer__loaded');



		/* =================================================================---------------------------------------
		3. Isotope for Archive and Search Page
		---------------------------------------------==========================================================*/
		jQuery(".neer-archive-page-row, .neer-search-page-row, .neer-blog-container.neer-blog-container-index-sp").each(function(){
		    var $container = jQuery(this),

		      colWidth = function () {
		        var w = $container.width(),
		        	bagW = jQuery(window).width(), 
		          columnNum = 2,
		          columnWidth = 0;
		        if (bagW > 1200) {
		          columnNum  = 2;
		        } else if (bagW > 1100) {
		          columnNum  = 2;
		        }
		        else if (bagW > 600) {
		          columnNum  = 2;
		        } else if (bagW > 450) {
		          columnNum  = 1;
		        } else if (bagW > 300) {
		          columnNum  = 1;
		        }
		        columnWidth = Math.floor(w/columnNum);
		        $container.find('.neer_blog').each(function() {
		          var $item = jQuery(this),
		            multiplier_w = $item.attr('class').match(/neer_blog-w(\d)/),
		            multiplier_h = $item.attr('class').match(/neer_blog-h(\d)/),
		            width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
		            height = multiplier_h ? columnWidth*multiplier_h[1] : columnWidth;
		          $item.css({
		            width: width,
		            // height: height
		          });
		        });
		        return columnWidth;
		      },
		      isotope = function () {
		        $container.isotope({
		          resizable: false,
		          itemSelector: '.neer_blog',
		          masonry: {
		            columnWidth: colWidth(),
		            gutterWidth: 3
		          }
		        });
		      };

		     if($container.find('.neer_blog').length > 0){
			    isotope();
			    jQuery(window).on('resize', isotope);
			    setTimeout(function(){
			    	ussWindowResize();
			    }, 100);
		    }

		});

		/* =================================================================---------------------------------------
		4. Slider Preloader
		---------------------------------------------==========================================================*/
		$('.neer-slider-main-section').css('height', 'auto');
		$('.neer-awesome-preloader-container').fadeOut();

		/* =================================================================---------------------------------------
		5. Equal Height blog
		---------------------------------------------==========================================================*/
		$('.single-blog-style-three.single-blog-style-three-rest-post').closest('div.neer-blog-container').children().css('height', $('.single-blog-style-three.single-blog-style-three-first-post').outerHeight());

		/* =================================================================---------------------------------------
		6. Sticky Menu
		---------------------------------------------==========================================================*/
		var mpos = 0;
		var conValue = '0px';


		if( $('#neer-header-top-section').length ) {
			mpos = 46;
		}
		if ( $('body').hasClass('admin-bar') ) {
			if( $('#neer-header-top-section').length ) {
				mpos = 78;
			} else {
				mpos = 32;
			}
			if ($(window).width() <= 991) {
				conValue = '46px';
			} else {
				conValue = '32px';
			}
		}

		
		var stickyHeaderTop = $('#stick-menu').offset().top,
			count           = 1;
		$(window).on('scroll', function(){
			
			
		  if( $(window).scrollTop() > 1 ) {
		      $('.neer-main-header-section').addClass('fixed-menu');
		  } else {
		      $('.neer-main-header-section').removeClass('fixed-menu');

		  }

		});

	});

	$(window).on('resize', function(){
		neer_mobile_menu();
	});
	
	$(document).ready(function(){
		
		jQuery(document).on('click', '.quantity .plus', function(e) {
		    $input = $(this).closest('.quantity').find('input.qty');
		    var val = parseInt($input.val());
		    var step = $input.attr('step');
		    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
		    $input.val( val + step ).change();

		    return false;
		});
		jQuery(document).on('click', '.quantity .minus', 
		    function(e) {
		    $input = $(this).closest('.quantity').find('input.qty');
		    var val = parseInt($input.val());
		    var step = $input.attr('step');
		    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
		    if (val > 0) {
		        $input.val( val - step ).change();
		    } 
		    return false;
		});

		/* =================================================================---------------------------------------
		7. Shop Isotope
		---------------------------------------------==========================================================*/
		function neer_shop_maso(){
			var $grid = $('.woocommerce ul.products');
			$grid.isotope({
			  itemSelector: 'li.product',
			  masonry: {
			    gutter: 35
			  }
			});
		}
		neer_shop_maso();

		/* =================================================================---------------------------------------
		8. Search box fix
		---------------------------------------------==========================================================*/
		$('#searchform').closest('div').addClass('searchform-extra-style');

		/* =================================================================---------------------------------------
		9. Magnific popup
		---------------------------------------------==========================================================*/
		function neer_portfolio_popup($var){
			$var.magnificPopup({
			  type: 'image',
			  gallery: {
			      enabled: true
			    }
			});
		}

		/* =================================================================---------------------------------------
		10. Load More masonary
		---------------------------------------------==========================================================*/
		var load_more_btn = jQuery('.neer-load-more-button-masonary');

		if(load_more_btn.exists()){
			load_more_btn.on('click', 'a', function(e){
				if(!$(this).hasClass('neer-load-more-url')){
					e.preventDefault();
					var $load_more_loader = jQuery('.neer_loadmore_loader'), 
						load_more_style = jQuery(this).attr('neer-data-load-more'),
						load_more_id = jQuery(this).attr('neer-data-load-more-id'),
						neer_get_info = JSON.parse(jQuery(this).closest('.neer-post-grid-main-section').attr('data-neer-values')),
						w_uniqid = jQuery(this).closest('.neer-carousel-default-css').attr('neer-data-unique-id'),
						self = jQuery(this),

						number = jQuery(this).closest('.neer-post-grid-main-section').find('.neer_post_grid').length;

					if(load_more_id !== '' && !self.hasClass('neer-load-more-finished')){

						jQuery.ajax({
							url : neer_ajax.ajax_url,
							type : 'POST',
							data : {
								action : 'neer_ajax_load',
								'neer_ppp': number,
								'neer_post_type': neer_get_info.neer_masonary_post_grid_posts_type,
								'neer_lightbox': neer_get_info.neer_post_grid_enable_disable_lightbox,
								'neer_order_by': neer_get_info.neer_masonary_post_grid_order_by,
								'neer_taxo': neer_get_info['neer_category_list_' + neer_get_info.neer_masonary_post_grid_posts_type],
			        			'load_more_id': load_more_id,
			        			'w_uniqid': w_uniqid
							},
							beforeSend : function (){

				                self.hide();

				                self.closest('.neer-load-more-button-masonary').append("<div class='neer_loadmore_loader'><img src='"+ neer_ajax.neer_site_dir +"/images/neer-load-more-preloader.gif' alt='Preloader'></div>");
				            },
							success : function( response ) {

								if(response !== '') {
									var obj = jQuery(jQuery.parseHTML(response));
					                
									obj.imagesLoaded(function(){
										self.closest('.neer-post-grid-main-section').find('.neer-post-grid-container').append(obj).isotope('insert',obj);

										ussWindowResize();

										if(neer_get_info.neer_post_grid_enable_disable_lightbox){
											neer_portfolio_popup($('a.post-g-details-link'));
										}
										

										jQuery('.neer_loadmore_loader').fadeOut("normal", function() {
									        jQuery(this).remove();
									    });
									    self.fadeIn();
									});

							
								    
								} else {
									self.closest('.neer-load-more-button-masonary').find('.neer_loadmore_loader').hide();
									self.closest('.neer-load-more-button-masonary').find('a').addClass('neer-load-more-finished').fadeIn().html('All Products Loaded.');
									setTimeout(function(){
										self.closest('.neer-load-more-button-masonary').fadeOut("normal", function() {
									        jQuery(this).remove();
									    });
									}, 2000);
								}
								
							}
						});
					}
				}
				return false;
			});
		}

		/* =================================================================---------------------------------------
		11. Price Filter
		---------------------------------------------==========================================================*/
		var price_filter_btn = jQuery('.neer-shop-price-filter .price_slider_wrapper button.button');

		if(price_filter_btn.exists()){
			price_filter_btn.on('click', function(e){
				e.preventDefault();
	

				var self = $(this),
					price_from = $('.price_label span.from').html(),
					price_to = $('.price_label span.to').html(),
					taxoVal = $('a.neer-shop-load-more').attr('data-taxo'),
					taxo = '';

					if(self.hasClass('neer-filter-last-btn')){
						price_from = self.closest('.neer-shop-price-filter').find('.price_slider_amount input#min_price').val();
						price_to = self.closest('.neer-shop-price-filter').find('.price_slider_amount input#max_price').val();
					} else {
						price_from = price_from.replace(/\D/g, ''); 
						price_to = price_to.replace(/\D/g, '');
						price_from = parseInt(price_from, 10);
						price_to = parseInt(price_to, 10);
					}

					orderbyData = $('a.neer-shop-load-more').attr('data-order');
					orderby = ''; // a string

					

					if(orderbyData) {
				 		orderby = orderbyData;
				 	} else if(getUrlParameter('orderby')){
				 		orderby = getUrlParameter('orderby');
				 	}

				 	if(taxoVal){
				 		taxo = taxoVal;
				 	}


					jQuery.ajax({
						url : neer_ajax.ajax_url,
						type : 'POST',
						data : {
							action : 'neer_shop_price_filter',
							'price_from'	: price_from,
							'price_to'	: price_to,
							'orderby'		: orderby,
							'taxo'			: taxo
						},
						beforeSend : function (){

			                
			            },
						success : function( response ) {
							var mainObj = JSON.parse(response);

							if(mainObj.main_content !== ''){
								var obj = jQuery(jQuery.parseHTML(mainObj.main_content));
								obj.imagesLoaded(function(){
									$('ul.products').html('').isotope('insert',obj);
								});
								neer_shop_maso();

								if(mainObj.total_posts <= mainObj.posts_per_page){
									$('.neer-shop-load-more-section').fadeOut();
								} else{
									$('.neer-shop-load-more-section a').attr('data-prices', mainObj.prices.join(','));
									$('.neer-shop-load-more-section').fadeIn();
								}

							} else {
							}
							
						}
					});

				return false;
			});
		}

		/* =================================================================---------------------------------------
		12. Orderby Filter
		---------------------------------------------==========================================================*/
		var product_order = jQuery('.woocommerce .woocommerce-ordering select');

		if(product_order.exists()){
			product_order.change(function(e){
				e.preventDefault();

				var self = $(this),
					orderby = '',
					termVal = $('a.neer-shop-load-more').attr('data-term'),
					taxoVal = $('a.neer-shop-load-more').attr('data-taxo'),
					term = '',
					taxo = ''; 

				if(getUrlParameter('orderby')) {
			 		orderby = getUrlParameter('orderby');
			 	} else {
			 		orderby = self.val();
			 	}

			 	if(termVal){
			 		term = termVal;
			 	}
			 	if(taxoVal){
			 		taxo = taxoVal;
			 	}

				jQuery.ajax({
					url : neer_ajax.ajax_url,
					type : 'POST',
					data : {
						action : 'neer_product_order',
						'orderby'		: orderby,
						'term'			: term,
						'taxo'			: taxo
					},
					beforeSend : function (){

		                
		            },
					success : function( response ) {
						var mainObj = JSON.parse(response);

						if(mainObj.main_content !== ''){
							var obj = jQuery(jQuery.parseHTML(mainObj.main_content));
							obj.imagesLoaded(function(){
								$('ul.products').html('').isotope('insert',obj);
							});
							neer_shop_maso();

							if(mainObj.total_posts <= mainObj.posts_per_page){
								$('.neer-shop-load-more-section').fadeOut();
								$('.neer-shop-load-more-section a').html('Load More');
							} else{
								if(mainObj.prices){
									$('.neer-shop-load-more-section a').attr('data-prices', mainObj.prices.join(','));
								}
								
								$('.neer-shop-load-more-section a').attr('data-order', self.val());
			
								$('.neer-shop-load-more-section').fadeIn();
							}

						} else {
						}
						
					}
				});
	
			});
		}

		/* =================================================================---------------------------------------
		13. Shop Product Load more
		---------------------------------------------==========================================================*/
		var shop_load_more = jQuery('a.neer-shop-load-more');

		if(shop_load_more.exists()){
			shop_load_more.on('click', function(e){
				e.preventDefault();
				 var number = jQuery(this).closest('div.neer-single-blog-page-content').find('ul.products li.product').length,
				 	self = $(this),
				 	orderbyData = self.attr('data-order'),
				 	termVal = self.attr('data-term'),
				 	taxoVal = self.attr('data-taxo'),
				 	prices = '',
				 	orderby = '',
				 	term = '',
				 	taxo = '';

				 	if(self.attr('data-prices')){
				 		prices = self.attr('data-prices');
				 	}
				 	if(orderbyData) {
				 		orderby = orderbyData;
				 	} else if(getUrlParameter('orderby')){
				 		orderby = getUrlParameter('orderby');
				 	}
				 	if(termVal){
				 		term = termVal;
				 	}
				 	if(taxoVal){
				 		taxo = taxoVal;
				 	}

				if(self.hasClass('neer-load-more-url')){
 					self.removeClass('neer-load-more-url');

						jQuery.ajax({
							url : neer_ajax.ajax_url,
							type : 'POST',
							data : {
								action 			: 'neer_shop_load_more',
								'neer_ppp'	: number,
								'prices'		: prices,
								'orderby'		: orderby,
								'term'			: term,
								'taxo'			: taxo
							},
							beforeSend : function (){
								self.closest('.neer-shop-load-more-section').addClass('loading');

				                self.html("<div class='neer_loadmore_loader'><img src='"+ neer_ajax.neer_site_dir +"/images/neer-load-more-preloader.gif' alt='Preloader'></div>");
				            },
							success : function( response ) {
								self.closest('.neer-shop-load-more-section').removeClass('loading');
								
								if(response !== ''){
									var obj = jQuery(jQuery.parseHTML(response));
									obj.imagesLoaded(function(){
										self.closest('div.neer-single-blog-page-content').find('ul.products').isotope('insert',obj);
									});
									neer_shop_maso();
									self.html('Load More');
								} else {
									self.html('Load More').closest('.neer-shop-load-more-section').fadeOut();
								}
								self.addClass('neer-load-more-url');

								
							}
						});
	
				}

				return false;
			});
		}

		/* =================================================================---------------------------------------
		14. Remove Container Class
		---------------------------------------------==========================================================*/
		$('.vc_default .neer_slider_single').find('.container').removeClass('container');


	    /* =================================================================---------------------------------------
		15. Add product gallery classes
		---------------------------------------------==========================================================*/
	    if(jQuery('.woocommerce div.product div.images .flex-control-thumbs').children().length <=0){
	    	$('.woocommerce-product-gallery').addClass('neer-no-gallery');
	    } else{
	    	$('.woocommerce-product-gallery').addClass('neer-has-gallery');
	    }

	    /* =================================================================---------------------------------------
		16. Account page customization
		---------------------------------------------==========================================================*/
	    $('.neer-create-account a').on('click', function(e){
	    	e.preventDefault();
	    	var self = $(this);

	    	if(self.closest('div').hasClass('neer-woocommerce-login-form')){
	    		$('.neer-woocommerce-registration-form').fadeIn();
	    		$('.neer-woocommerce-login-form').hide();
	    	} else{
	    		$('.neer-woocommerce-registration-form').hide();
	    		$('.neer-woocommerce-login-form').fadeIn();

	    	}

	    	return false;
	    });

	    /* =================================================================---------------------------------------
		17. Mobile Menu
		---------------------------------------------==========================================================*/
		
		neer_mobile_menu();

	});

}(jQuery));