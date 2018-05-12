(function ($) {
    'use strict';

  $(document).ready(function () {

      // Check if Page Scrollbar is visible
      //------------------------------------------------------------------
      var hasScrollbar = function () {
          // The Modern solution
          if (typeof window.innerWidth === 'number') {
              return window.innerWidth > document.documentElement.clientWidth;
          }

          // rootElem for quirksmode
          var rootElem = document.documentElement || document.body;

          // Check overflow style property on body for fauxscrollbars
          var overflowStyle;

          if (typeof rootElem.currentStyle !== 'undefined') {
              overflowStyle = rootElem.currentStyle.overflow;
          }

          overflowStyle = overflowStyle || window.getComputedStyle(rootElem, '').overflow;

          // Also need to check the Y axis overflow
          var overflowYStyle;

          if (typeof rootElem.currentStyle !== 'undefined') {
              overflowYStyle = rootElem.currentStyle.overflowY;
          }

          overflowYStyle = overflowYStyle || window.getComputedStyle(rootElem, '').overflowY;

          var contentOverflows = rootElem.scrollHeight > rootElem.clientHeight;
          var overflowShown = /^(visible|auto)$/.test(overflowStyle) || /^(visible|auto)$/.test(overflowYStyle);
          var alwaysShowScroll = overflowStyle === 'scroll' || overflowYStyle === 'scroll';

          return (contentOverflows && overflowShown) || (alwaysShowScroll);
      };
      if (hasScrollbar()) {
          $('body').addClass('hasScrollbar');
      }

    // Disable default link behavior for dummy links that have href='#'
		var $emptyLink = $( 'a[href="#"]' );
		$emptyLink.on( 'click', function ( e ) {
			e.preventDefault();
		} );

    // Stuck Navbar on scroll
    //---------------------------------------------------------
    var $stickyNavbar = $('.navbar-sticky .navbar');
  	if($stickyNavbar.length) {
  		var sticky = new Waypoint.Sticky({
  		  element: $stickyNavbar[0]
  		});
  	}


    // Ghost navbar on scroll
    //---------------------------------------------------------
    var $ghostNavbar = $( '.navbar-ghost-dark .navbar, .navbar-ghost-light .navbar' );
    if( $ghostNavbar.length ) {
      var $ghostNavbarH = $ghostNavbar.outerHeight();
      $( window ).on( 'scroll', function() {
        if ( $( window ).scrollTop() > $ghostNavbarH ) {
          $ghostNavbar.addClass( 'in-view' );
        } else {
          $ghostNavbar.removeClass( 'in-view' );
        }
      } );
    }

    // Fullscreen Menu
    //---------------------------------------------------------
   	var $fsMenuToggle = $('[data-toggle="fullscreen"]'),
  			$fsMenu = $('.fs-menu-wrap'),
        $fsMenuTools = $('.fs-menu-wrap .tools');
    $fsMenuTools.innerHeight($('.fs-menu').innerHeight());
		$fsMenuToggle.on('click', function() {
      var self = $(this);
		  var clicks = self.data('clicks');
		  if (clicks) {
				$fsMenu.removeClass('is-visible');
				setTimeout(function(){
          body.removeClass( 'menu-open' );
          self.removeClass('active');
					$fsMenuToggle.parent().removeClass('expanded');
				}, 400);
		  } else {
        body.addClass( 'menu-open' );
        self.addClass('active');
				$fsMenuToggle.parent().addClass('expanded');
				$fsMenu.addClass('is-visible');
		  }
		  self.data("clicks", !clicks);
		});

    // Parallax Backgrounds
    //---------------------------------------------------------
    var bgParallax = $( '.bg-parallax' );

    // Detect IE Browser Version
    function detectIE() {
      var ua = window.navigator.userAgent;

      var msie = ua.indexOf('MSIE ');
      if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
      }

      var trident = ua.indexOf('Trident/');
      if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
      }

      var edge = ua.indexOf('Edge/');
      if (edge > 0) {
        // Edge (IE 12+) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
      }

      // other browser
      return false;
    }

    var ieVersion = detectIE();

    if( ( bgParallax.length > 0 && ieVersion === false ) || (  bgParallax.length > 0 && ieVersion >= 12 ) ) {
      bgParallax.each( function() {
        var speed = $( this ).data('parallax-speed'),
            type = $( this ).data('parallax-type');
        $( this ).jarallax( {
          speed: speed,
          type: type,
          zIndex: 0,
          noAndroid: true,
          noIos: true
        } );
      } );
    }

    // Wraps all select elements with div.form-select
    //---------------------------------------------------------
    var $select = $('select:not([multiple])');
    $select.wrap("<div class='form-select'></div>");


    // Image Carousel Widget
    //---------------------------------------------------------
    var carouselWidget = $( '.widget_startapp_image_carousel .widget-inner' );
    if ( carouselWidget.length > 0 ) {
      carouselWidget.each(function() {
        var prevBtn = $( this ).parent().find( '.slick-prev' ),
            nextBtn = $( this ).parent().find( '.slick-next' );
        $( this ).slick({
          prevArrow: prevBtn,
          nextArrow: nextBtn
        });
      });
    }

    // Revolution Slider Financial Home Page
    var revoFinancial = $( '.revo-slider-financial' );
    if ( revoFinancial.length > 0 ) {
      $('.revo-slider-financial').show().revolution({
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:7000,
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
                touchenabled:"on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
                style:"hades",
                enable:true,
                hide_onmobile:true,
                hide_under:767,
                hide_onleave:false,
                tmp:'<div class="tp-arr-allwrapper">    <div class="tp-arr-imgholder"><\/div><\/div>',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                }
            }
        },
        viewPort: {
            enable:true,
            outof:"wait",
            visible_area:"50%"
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1170,1024,778,480],
        gridheight:[500,500,500,500],
        lazyType:"none",
        parallax: {
            type:"scroll",
            origo:"slidercenter",
            speed:400,
            levels:[5,10,15,20,25,30,35,40,-15,-20,-25,-30,-35,-40,-45,55],
            type:"scroll",
        },
        shadow:0,
        spinner:"off",
        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: ".site-header",
        fullScreenOffset: "",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
      });
    }

    // Revolution Slider SAAS Home Page
    var revoSaas = $( '.revo-slider-saas' );
    if ( revoSaas.length > 0 ) {
      $('.revo-slider-saas').show().revolution({
        sliderType:"hero",        
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:9000,
        navigation: {},
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1170,1024,778,480],
        gridheight:[520,520,520,520],
        lazyType:"none",
        parallax: {
          type:"mouse",
          origo:"enterpoint",
          speed:400,
          levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
          type:"mouse",
          disable_onmobile:"on"
        },
        shadow:0,
        spinner:"spinner0",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: ".site-header",
        fullScreenOffset: "",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
          simplifyAll:"off",
          disableFocusListener:false,
        }
      });
    }


    // Call / Dismiss Functions (Backdrop, Off-Canvas Sidebar / Menu, Search Form )
    //-----------------------------------------------------------------------------
    var backdrop = $( '.site-backdrop' ),
        sidebar = $( '.off-canvas-sidebar' ),
        offcanvasMenu = $( '.off-canvas-menu' ),
        searchForm = $( '.site-search-form' ),
        searchBox = $( '.site-search-form .search-box input' ),
        closeSearch = $( '.site-search-form .close-btn' ),
        closeSidebar = $( '.off-canvas-sidebar .close-btn' ),
        closeOffcanvasMenu = $( '.off-canvas-menu .close-btn' ),
        body = $( 'body' );

    function callBackdrop() {
      backdrop.addClass( 'active' );
    }
    function callSearch() {
      searchForm.addClass( 'open' );
      setTimeout( function() {
        searchBox.focus();
      }, 400 );
    }
    function callSidebar() {
      sidebar.addClass( 'open' );
      body.addClass( 'sidebar-open' );
    }
    function callOffcanvasMenu() {
      offcanvasMenu.addClass( 'open' );
      body.addClass( 'menu-open' );
    }
    function dismissBackdrop() {
      backdrop.removeClass( 'active' );
    }
    function dismissSearch() {
      searchForm.removeClass( 'open' );
    }
    function dismissSidebar() {
      sidebar.removeClass( 'open' );
      body.removeClass( 'sidebar-open' );
    }
    function dismissOffcanvasMenu() {
      offcanvasMenu.removeClass( 'open' );
      body.removeClass( 'menu-open' );
    }


    // Tools Toggles
    //---------------------------------------------------------

    // Language Toggle
    var langBtn = $( '.site-header .lang-switcher' );
    langBtn.on( 'click', function() {
      $( this ).toggleClass( 'active' );
    } );

    // Topbar Toggle
    var topbarBtn = $( '.topbar-btn' ),
        topbar = $( '.site-header .topbar' );
    topbarBtn.on( 'click', function( e ) {
      $( this ).toggleClass( 'active' );
      topbar.toggleClass( 'open' );
      e.preventDefault();
    } );

    // Search Toggle
    var searchBtn = $( '.site-search-btn' );
    searchBtn.on( 'click', function( e ) {
      callSearch();
      callBackdrop();
      e.preventDefault();
    } );

    // Off-Canvas Sidebar Toggle
    var sidebarBtn = $( '.sidebar-btn' );
    sidebarBtn.on( 'click', function( e ) {
      callSidebar();
      callBackdrop();
      e.preventDefault();
    } );

    // Off-Canvas Menu Toggle
    var menuBtn = $( '[data-toggle="offcanvas"]' );
    menuBtn.on( 'click', function( e ) {
      callOffcanvasMenu();
      callBackdrop();
      e.preventDefault();
    } );

    // Topbar Menu Dropdown
    var topbarDropdown = $( '.topbar-menu > ul > li.menu-item-has-children > a ' );
    topbarDropdown.on( 'click', function( e ) {
      $( this ).parent().toggleClass( 'active' );
      e.preventDefault();
    } );

    // Dismiss All Overlay Objects
    backdrop.on( 'click', function() {
      dismissSearch();
      dismissSidebar();
      dismissOffcanvasMenu();
      dismissBackdrop();
    } );
    closeSidebar.on( 'click', function() {
      dismissSidebar();
      dismissBackdrop();
    } );
    closeOffcanvasMenu.on( 'click', function() {
      dismissOffcanvasMenu();
      dismissBackdrop();
    } );
    closeSearch.on( 'click', function() {
      dismissSearch();
      dismissBackdrop();
    } );


    // Vertical Navigation Toggle Submenu
  	//----------------------------------------------------
  	var $hasSubmenu = $( '.menu-item-has-children > a > .arrow, .has-mega-menu > a > .arrow' );
    $hasSubmenu.click( function( e ) {
  		if( $( this ).parent().parent().hasClass( 'expanded' ) ) {
  			$( this ).parent().parent().removeClass( 'expanded' );
  		} else {
  			$( this ).parent().parent().siblings( 'li' ).removeClass( 'expanded' );
  			$( this ).parent().parent().toggleClass( 'expanded' );
  		}
      e.preventDefault();
  	} );


    // Scroller Navigation
    //---------------------------------------------------------
    var $scrollerMenuItem = $( '.scroller-menu > ul > li' ),
        $scrollerMenulink = $( '.scroller-menu > ul > li > a' );
    $scrollerMenuItem.each( function() {
      var $menuItemLink = $(this).find('a'),
          $menuItemLinkText = $menuItemLink.text();
      $menuItemLink.append( '<span class="scroller-tooltip">' + $menuItemLinkText + '</span>' );
      console.log($menuItemLinkText);
    });

    // Scroll Spy
    $( '.fw-section' ).scrollSpy();

    // Smooth scroll to element
		$( document ).on( 'click', '.scroller-menu a, .scroll-to', function ( event ) {
			var target = $( this ).attr( 'href' );
			if ( '#' === target ) {
				return false;
			}

			var $target = $( target );
			if( $target.length > 0 ) {
				var $elemOffsetTop = $target.data( 'offset-top' ) || 180;
				$( 'html' ).velocity( "scroll", {
					offset: $( this.hash ).offset().top - $elemOffsetTop,
					duration: 1000,
					easing: 'easeOutExpo',
					mobileHA: false
				} );
			}
			event.preventDefault();
		} );


    // Animated Scroll to Top Button
    //---------------------------------------------------------
    var $scrollTop = $( '.scroll-to-top-btn' );
    if ( $scrollTop.length > 0 ) {
      $( window ).on( 'scroll', function () {
        if ( $( window ).scrollTop() > 700 ) {
          $scrollTop.addClass( 'visible' );
        } else {
          $scrollTop.removeClass( 'visible' );
        }
      } );
      $scrollTop.on( 'click', function ( e ) {
        e.preventDefault();
        $( 'html' ).velocity( "scroll", { offset: 0, duration: 1100, easing: 'easeOutExpo', mobileHA: false } );
      } );
    }

        /**
        * Carousel Function
        * @param {String} selector
        * @param {Number} itemsLG
        * @param {Number} itemsMD
        * @param {Number} itemsSM
        * @param {Number} itemsXS
        */
        function contentCarousel( selector, itemsLG, itemsMD, itemsSM, itemsXS ) {
          var $element = $( selector );
          if ( $element.length === 0 ) {
              return false;
          }

          $( selector ).each( function() {
            var self = $( this );

            self.slick( {
              slidesToShow: itemsLG,
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: itemsMD
                  }
                },
                {
                  breakpoint: 991,
                  settings: {
                    slidesToShow: itemsSM
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: itemsXS
                  }
                }
              ]
            } );
          } );
        }

        // Image Carousel
        contentCarousel( '.image-carousel', 1, 1, 1, 1 );

        // Timeline Carousel
        contentCarousel( '.timeline', 4, 3, 2, 1 );

        // Testimonials Slider
        contentCarousel( '.testimonials-slider', 1, 1, 1, 1 );

        // Testimonials Carousel
        $('.testimonials-carousel').each(function() {
          var self = $( this );
          var itemsLG = self.data('items-lg'),
              itemsMD = self.data('items-md'),
              itemsSM = self.data('items-sm'),
              itemsXS = self.data('items-xs');
          contentCarousel( self, itemsLG, itemsMD, itemsSM, itemsXS );
        });

        // Logo Carousel
        $('.logo-carousel').each(function() {
          var self = $( this );
          var itemsLG = self.data('items-lg'),
              itemsMD = self.data('items-md'),
              itemsSM = self.data('items-sm'),
              itemsXS = self.data('items-xs');
          contentCarousel( self, itemsLG, itemsMD, itemsSM, itemsXS );
        });


        /**
         * Video Popup
         */
         var $videoPopup = $( '.video-popup-btn' );
         if( $videoPopup.length ) {
           $videoPopup.magnificPopup( {
             type: 'iframe'
           } );
         }

        /**
         * Progress Bars on Scroll Animation
         * @param {String} items
         */
        function pbOnScrollAnimation( items, trigger ) {
          items.each( function() {
            var pbElement = $(this),
              curVal = pbElement.attr('data-current-value');

            var pbTrigger = ( trigger ) ? trigger : pbElement;

            pbTrigger.waypoint(function(direction) {
              pbElement.find('.progress-bar > .bar').css({'width': curVal + '%'});
              pbElement.find('.progress-bar > .value').addClass('is-visible').css({'width': curVal + '%'});
            },{
              offset: '88%'
            });
            pbElement.find('.progress-bar > .value > i').counterUp({
              delay: 10,
              time: 1100
            });
          });
        }

        pbOnScrollAnimation( $('.progress-animated') );

        /**
         * Counters (Animated Digits)
         * @param {String} items
         */
        function counterOnScrollAnimation( items ) {
          items.each( function() {
            var counterElement = $(this);
            counterElement.find('.digit').counterUp({
              delay: 10,
              time: 1100
            });
          });
        }
        counterOnScrollAnimation( $('.animated-digit-box') );

        /**
         * Countdown
         * @param {String} items
         */
        function countDownFunc( items, trigger ) {
          items.each( function() {
            var countDown = $(this),
              dateTime = $(this).data('date-time');

            var countDownTrigger = ( trigger ) ? trigger : countDown;
            countDownTrigger.downCount({
              date: dateTime
            });
          });
        }

        countDownFunc( $('.countdown') );

        // Google Maps API
        var $googleMap = $('.google-map');
        if ($googleMap.length > 0 && typeof $.fn.gmap3 === 'function') {
            $googleMap.each(function () {
                var mapHeight = $(this).data('height') || 500,
                    address = $(this).data('address') || '',
                    zoom = $(this).data('zoom') || 14,
                    controls = $(this).data('disable-controls'),
                    scrollwheel = $(this).data('scrollwheel'),
                    marker = $(this).data('marker') || '',
                    markerTitle = $(this).data('marker-title') || false,
                    styles = $(this).data('styles') || '';
                $(this).height(mapHeight);
                $(this).gmap3({
                    marker: {
                        address: address,
                        data: markerTitle,
                        options: {
                            icon: marker
                        },
                        events: {
                            mouseover: function (marker, event, context) {
                                if (typeof markerTitle !== 'undefined' || false !== markerTitle) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({get: {name: "infowindow"}});
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(context.data);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {content: context.data}
                                            }
                                        });
                                    }
                                }
                            },
                            mouseout: function () {
                                var infowindow = $(this).gmap3({get: {name: "infowindow"}});
                                if (infowindow) {
                                    infowindow.close();
                                }
                            }
                        }
                    },
                    map: {
                        options: {
                            zoom: zoom,
                            disableDefaultUI: controls,
                            scrollwheel: scrollwheel,
                            styles: styles
                        }
                    }
                });
            });
        }

    /**
     * Gallery preview Popup (photoSwipe)
     * @param {String} gallerySelector
     */
    var $gallery = $( '.gallery-grid' );
    $gallery.each( function () {
      var $this = $( this );
      var getItems = function () {
        var items = [];
        $this.find( 'a' ).each( function () {
          var $href = $( this ).attr( 'href' ),
            $size = $( this ).data( 'size' ).split( 'x' ),
            $width = $size[ 0 ],
            $height = $size[ 1 ],
            $caption = $( this ).find( '.wp-caption-text' );

          var item = {
            src: $href,
            w: $width,
            h: $height,
            title: $caption.clone().children().remove().end().text()
          };
          items.push( item );
        } );
        return items;
      };

      var items = $this.find( '.grid-item' );
      var images = getItems();
      var $pswp = $( '.pswp' )[ 0 ];

      $this.on( 'click', '.grid-item', function ( e ) {
        e.preventDefault();

        var $index = $.inArray( this, items );
        var options = {
          index: $index,
          bgOpacity: 0.9,
          showHideOpacity: true,
          closeOnScroll: false
        };

        // Initialize PhotoSwipe
        var lightBox = new PhotoSwipe( $pswp, PhotoSwipeUI_Default, images, options );
        lightBox.init();
      } );

    } );

    }); // End document ready
    

    /** Infinite Scroll & Isotope init */
    var $masonryGrid = $('.masonry-grid');
    $(window).on('load', function() {
          if ($masonryGrid.length > 0) {
            $masonryGrid.isotope({
              itemSelector: '.grid-item',
              transitionDuration: '0.7s',
              masonry: {
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer'
              }
            });
            setTimeout(function() {
              $masonryGrid.isotope('layout');
            }, 1);
          }
        });


  /** Shortcode Portfolio: Isotope Filters */
  $( document ).on( 'click', '.nav-filters a', function ( e ) {
    e.preventDefault();

    // handle click on filter item,

    var $this = $( this );
    var filter = $this.data( 'filter' );
    var $parent = $this.parent( 'li' );
    var $filters = $this.parents( '.nav-filters' );
    var gridID = $filters.data( 'grid-id' );
    var $grid = $( '#' + gridID );

    if ( $parent.hasClass( 'active' ) ) {
      return false;
    }

    // add class .active for recently clicked item
    $filters.find( '.active' ).removeClass( 'active' );
    $parent.addClass( 'active' );

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    // and apply new options to isotope containers
    $grid.isotope( { filter: filter } );

    return true;
  } );

  var $customizerToggle = $( '.toggle' );
  $customizerToggle.on( 'click', function () {
      $( '.customizer' ).toggleClass( 'active' );
  } );

})(jQuery);
