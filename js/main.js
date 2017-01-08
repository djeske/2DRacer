<!--


/* Tipsy */

// tipsy, facebook style tooltips for jquery
// version 1.0.0a
// (c) 2008-2010 jason frame [jason@onehackoranother.com]
// released under the MIT license

var tipsyCode = function($) {
    
    function maybeCall(thing, ctx) {
        return (typeof thing == 'function') ? (thing.call(ctx)) : thing;
    };
    
    function isElementInDOM(ele) {
      while (ele = ele.parentNode) {
        if (ele == document) return true;
      }
      return false;
    };
    
    function Tipsy(element, options) {
        this.$element = $(element);
        this.options = options;
        this.enabled = true;
        this.fixTitle();
    };
    
    Tipsy.prototype = {
        show: function() {
            var title = this.getTitle();
            if (title && this.enabled) {
                var $tip = this.tip();
                
                $tip.find('.tipsy-inner')[this.options.html ? 'html' : 'text'](title);
                $tip[0].className = 'tipsy'; // reset classname in case of dynamic gravity
                $tip.remove().css({top: 0, left: 0, visibility: 'hidden', display: 'block'}).prependTo(document.body);
                
                var pos = $.extend({}, this.$element.offset(), {
                    width: this.$element[0].offsetWidth,
                    height: this.$element[0].offsetHeight
                });
                
                var actualWidth = $tip[0].offsetWidth,
                    actualHeight = $tip[0].offsetHeight,
                    gravity = maybeCall(this.options.gravity, this.$element[0]);
                
                var tp;
                switch (gravity.charAt(0)) {
                    case 'n':
                        tp = {top: pos.top + pos.height + this.options.offset, left: pos.left + pos.width / 2 - actualWidth / 2};
                        break;
                    case 's':
                        tp = {top: pos.top - actualHeight - this.options.offset, left: pos.left + pos.width / 2 - actualWidth / 2};
                        break;
                    case 'e':
                        tp = {top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth - this.options.offset};
                        break;
                    case 'w':
                        tp = {top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width + this.options.offset};
                        break;
                }
                
                if (gravity.length == 2) {
                    if (gravity.charAt(1) == 'w') {
                        tp.left = pos.left + pos.width / 2 - 15;
                    } else {
                        tp.left = pos.left + pos.width / 2 - actualWidth + 15;
                    }
                }
                
                $tip.css(tp).addClass('tipsy-' + gravity);
                $tip.find('.tipsy-arrow')[0].className = 'tipsy-arrow tipsy-arrow-' + gravity.charAt(0);
                if (this.options.className) {
                    $tip.addClass(maybeCall(this.options.className, this.$element[0]));
                }
                
                if (this.options.fade) {
                    $tip.stop().css({opacity: 0, display: 'block', visibility: 'visible'}).animate({opacity: this.options.opacity});
                } else {
                    $tip.css({visibility: 'visible', opacity: this.options.opacity});
                }
            }
        },
        
        hide: function() {
            if (this.options.fade) {
                this.tip().stop().fadeOut(function() { $(this).remove(); });
            } else {
                this.tip().remove();
            }
        },
        
        fixTitle: function() {
            var $e = this.$element;
            if ($e.attr('title') || typeof($e.attr('original-title')) != 'string') {
                $e.attr('original-title', $e.attr('title') || '').removeAttr('title');
            }
        },
        
        getTitle: function() {
            var title, $e = this.$element, o = this.options;
            this.fixTitle();
            var title, o = this.options;
            if (typeof o.title == 'string') {
                title = $e.attr(o.title == 'title' ? 'original-title' : o.title);
            } else if (typeof o.title == 'function') {
                title = o.title.call($e[0]);
            }
            title = ('' + title).replace(/(^\s*|\s*$)/, "");
            return title || o.fallback;
        },
        
        tip: function() {
            if (!this.$tip) {
                this.$tip = $('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"></div>');
                this.$tip.data('tipsy-pointee', this.$element[0]);
            }
            return this.$tip;
        },
        
        validate: function() {
            if (!this.$element[0].parentNode) {
                this.hide();
                this.$element = null;
                this.options = null;
            }
        },
        
        enable: function() { this.enabled = true; },
        disable: function() { this.enabled = false; },
        toggleEnabled: function() { this.enabled = !this.enabled; }
    };
    
    $.fn.tipsy = function(options) {
        
        if (options === true) {
            return this.data('tipsy');
        } else if (typeof options == 'string') {
            var tipsy = this.data('tipsy');
            if (tipsy) tipsy[options]();
            return this;
        }
        
        options = $.extend({}, $.fn.tipsy.defaults, options);
        
        function get(ele) {
            var tipsy = $.data(ele, 'tipsy');
            if (!tipsy) {
                tipsy = new Tipsy(ele, $.fn.tipsy.elementOptions(ele, options));
                $.data(ele, 'tipsy', tipsy);
            }
            return tipsy;
        }
        
        function enter() {
            var tipsy = get(this);
            tipsy.hoverState = 'in';
            if (options.delayIn == 0) {
                tipsy.show();
            } else {
                tipsy.fixTitle();
                setTimeout(function() { if (tipsy.hoverState == 'in') tipsy.show(); }, options.delayIn);
            }
        };
        
        function leave() {
            var tipsy = get(this);
            tipsy.hoverState = 'out';
            if (options.delayOut == 0) {
                tipsy.hide();
            } else {
                setTimeout(function() { if (tipsy.hoverState == 'out') tipsy.hide(); }, options.delayOut);
            }
        };
        
        if (!options.live) this.each(function() { get(this); });
        
        if (options.trigger != 'manual') {
            var binder   = options.live ? 'live' : 'bind',
                eventIn  = options.trigger == 'hover' ? 'mouseenter' : 'focus',
                eventOut = options.trigger == 'hover' ? 'mouseleave' : 'blur';
            this[binder](eventIn, enter)[binder](eventOut, leave);
        }
        
        return this;
        
    };
    
    $.fn.tipsy.defaults = {
        className: null,
        delayIn: 0,
        delayOut: 0,
        fade: false,
        fallback: '',
        gravity: 'n',
        html: false,
        live: false,
        offset: 0,
        opacity: 0.8,
        title: 'title',
        trigger: 'hover'
    };
    
    $.fn.tipsy.revalidate = function() {
      $('.tipsy').each(function() {
        var pointee = $.data(this, 'tipsy-pointee');
        if (!pointee || !isElementInDOM(pointee)) {
          $(this).remove();
        }
      });
    };
    
    // Overwrite this method to provide options on a per-element basis.
    // For example, you could store the gravity in a 'tipsy-gravity' attribute:
    // return $.extend({}, options, {gravity: $(ele).attr('tipsy-gravity') || 'n' });
    // (remember - do not modify 'options' in place!)
    $.fn.tipsy.elementOptions = function(ele, options) {
        return $.metadata ? $.extend({}, options, $(ele).metadata()) : options;
    };
    
    $.fn.tipsy.autoNS = function() {
        return $(this).offset().top > ($(document).scrollTop() + $(window).height() / 2) ? 's' : 'n';
    };
    
    $.fn.tipsy.autoWE = function() {
        return $(this).offset().left > ($(document).scrollLeft() + $(window).width() / 2) ? 'e' : 'w';
    };
    
    /**
     * yields a closure of the supplied parameters, producing a function that takes
     * no arguments and is suitable for use as an autogravity function like so:
     *
     * @param margin (int) - distance from the viewable region edge that an
     *        element should be before setting its tooltip's gravity to be away
     *        from that edge.
     * @param prefer (string, e.g. 'n', 'sw', 'w') - the direction to prefer
     *        if there are no viewable region edges effecting the tooltip's
     *        gravity. It will try to vary from this minimally, for example,
     *        if 'sw' is preferred and an element is near the right viewable 
     *        region edge, but not the top edge, it will set the gravity for
     *        that element's tooltip to be 'se', preserving the southern
     *        component.
     */
     $.fn.tipsy.autoBounds = function(margin, prefer) {
		return function() {
			var dir = {ns: prefer[0], ew: (prefer.length > 1 ? prefer[1] : false)},
			    boundTop = $(document).scrollTop() + margin,
			    boundLeft = $(document).scrollLeft() + margin,
			    $this = $(this);

			if ($this.offset().top < boundTop) dir.ns = 'n';
			if ($this.offset().left < boundLeft) dir.ew = 'w';
			if ($(window).width() + $(document).scrollLeft() - $this.offset().left < margin) dir.ew = 'e';
			if ($(window).height() + $(document).scrollTop() - $this.offset().top < margin) dir.ns = 's';

			return dir.ns + (dir.ew ? dir.ew : '');
		}
	};
    
};

/* Main */

var main = function() {

    $('a.nav-start').hover(function(){
         $('img.nav-start').stop(true, false).animate({ top: "48px" }, 600);
    }, function() {
        $('img.nav-start').stop(true, false).animate({ top: "-15px" }, 1300);
    });

	if ($('a.nav-imp').hasClass('nav-selected') == true) {
		$('img.nav-imp').css("top", "48px");
	}
	else {
        $('a.nav-imp').hover(function(){
             $('img.nav-imp').stop(true, false).animate({ top: "48px" }, 600);
        }, function() {
            $('img.nav-imp').stop(true, false).animate({ top: "-15px" }, 1300);
        });
	}

	if ($('a.nav-stats').hasClass('nav-selected') == true) {
		$('img.nav-stats').css("top", "48px");
	}
	else {
        $('a.nav-stats').hover(function(){
             $('img.nav-stats').stop(true, false).animate({ top: "48px" }, 600);
        }, function() {
            $('img.nav-stats').stop(true, false).animate({ top: "-15px" }, 1300);
        });
	}

	$('#header li span').mouseenter(function() {
		$('#header li p').show();
	});
	$('#header li span').mouseleave(function() {
		$('#header li p').hide();
	});

    var pixel_rot = $('span#php-jquery-variable-hack-pixel1').attr("class");
    var pixel_schwarz = $('span#php-jquery-variable-hack-pixel2').attr("class");
	$('.dot-active img').attr("src", pixel_rot);

	$('#slider-handler1 .slider-prev').click(function() {
		var currentSlide = $('#slider1 .slide-active');
		var prevSlide = currentSlide.prev();
		var currentDot = $('#slider-handler1 .dot-active');
		var prevDot = currentDot.prev();
		if (prevDot.length == 0) {
			prevSlide = $('#slider1 .slide').last();
			prevDot = $('#slider-handler1 .dot').last();
		}
		currentSlide.fadeOut(700).removeClass('slide-active');
		prevSlide.fadeIn(700).addClass('slide-active');
		$('#slider-handler1 .dot-active img').attr("src", pixel_schwarz);
		currentDot.removeClass('dot-active');
		prevDot.addClass('dot-active');
		$('#slider-handler1 .dot-active img').attr("src", pixel_rot);
	});
	$('#slider-handler1 .slider-next').click(function() {
		var currentSlide = $('#slider1 .slide-active');
		var nextSlide = currentSlide.next();
		var currentDot = $('#slider-handler1 .dot-active');
		var nextDot = currentDot.next();
		if (nextDot.length == 0) {
			nextSlide = $('#slider1 .slide').first();
			nextDot = $('#slider-handler1 .dot').first();
		}
		currentSlide.fadeOut(700).removeClass('slide-active');
		nextSlide.fadeIn(700).addClass('slide-active');
		$('#slider-handler1 .dot-active img').attr("src", pixel_schwarz);
		currentDot.removeClass('dot-active');
		nextDot.addClass('dot-active');
		$('#slider-handler1 .dot-active img').attr("src", pixel_rot);
	});
	$('#slider-handler2 .slider-prev').click(function() {
		var currentSlide = $('#slider2 .slide-active');
		var prevSlide = currentSlide.prev();
		var currentDot = $('#slider-handler2 .dot-active');
		var prevDot = currentDot.prev();
		if (prevDot.length == 0) {
			prevSlide = $('#slider2 .slide').last();
			prevDot = $('#slider-handler2 .dot').last();
		}
		currentSlide.fadeOut(700).removeClass('slide-active');
		prevSlide.fadeIn(700).addClass('slide-active');
		$('#slider-handler2 .dot-active img').attr("src", pixel_schwarz);
		currentDot.removeClass('dot-active');
		prevDot.addClass('dot-active');
		$('#slider-handler2 .dot-active img').attr("src", pixel_rot);
	});
	$('#slider-handler2 .slider-next').click(function() {
		var currentSlide = $('#slider2 .slide-active');
		var nextSlide = currentSlide.next();
		var currentDot = $('#slider-handler2 .dot-active');
		var nextDot = currentDot.next();
		if (nextDot.length == 0) {
			nextSlide = $('#slider2 .slide').first();
			nextDot = $('#slider-handler2 .dot').first();
		}
		currentSlide.fadeOut(700).removeClass('slide-active');
		nextSlide.fadeIn(700).addClass('slide-active');
		$('#slider-handler2 .dot-active img').attr("src", pixel_schwarz);
		currentDot.removeClass('dot-active');
		nextDot.addClass('dot-active');
		$('#slider-handler2 .dot-active img').attr("src", pixel_rot);
	});

	$('#slider-handler1 img').click(function() {
		if ($(this).parent().hasClass('dot-active') == false) {
			$('#slider-handler1 .dot-active img').attr("src", pixel_schwarz);
			$('#slider-handler1 .dot-active').removeClass('dot-active');
			$(this).attr("src", pixel_rot);
			$(this).parent().addClass('dot-active');
			var slideNumber = '.'+$(this).attr("class");
			$('#slider1 .slide-active').fadeOut(700).removeClass('slide-active');
			$('#slider1 div.slide'+slideNumber).fadeIn(700).addClass('slide-active');
		}
	});
	$('#slider-handler2 img').click(function() {
		if ($(this).parent().hasClass('dot-active') == false) {
			$('#slider-handler2 .dot-active img').attr("src", pixel_schwarz);
			$('#slider-handler2 .dot-active').removeClass('dot-active');
			$(this).attr("src", pixel_rot);
			$(this).parent().addClass('dot-active');
			var slideNumber = '.'+$(this).attr("class");
			$('#slider2 .slide-active').fadeOut(700).removeClass('slide-active');
			$('#slider2 div.slide'+slideNumber).fadeIn(700).addClass('slide-active');
		}
	});

    $('#name').click(function() {
        if (this.value == this.defaultValue) {
          this.value = '';
          $('#name').css({color: "#353131"});
        }
    });
    $('#name').blur(function() {
        if (this.value == '') {
          this.value = this.defaultValue;
          $('#name').css({color: "#777777"});
        }
    });

    $('input#name-submit').click(function() {
        var name = $('input#name').val();
        var piste = $('span#php-jquery-variable-hack').attr("class");
        var lang_norundenzeit = $('span#php-jquery-variable-hack2').attr("class");
        var ohne_items = $('span#php-jquery-variable-hack3').attr("class");
        var mit_items = $('span#php-jquery-variable-hack4').attr("class");
        var th_bestzeit = $('span#php-jquery-variable-hack5').attr("class");
        var th_von = $('span#php-jquery-variable-hack6').attr("class");
        var th_rang = $('span#php-jquery-variable-hack7').attr("class");
        var th_rundenzeit = $('span#php-jquery-variable-hack8').attr("class");
        var link_persbestzeiten = $('span#php-jquery-variable-hack9').attr("class");
        var img_gold = $('span#php-jquery-variable-hack10').attr("class");
        var img_silber = $('span#php-jquery-variable-hack11').attr("class");
        var img_bronze = $('span#php-jquery-variable-hack12').attr("class");
        var title_gold = $('span#php-jquery-variable-hack13').attr("class");
        var title_silber = $('span#php-jquery-variable-hack14').attr("class");
        var title_bronze = $('span#php-jquery-variable-hack15').attr("class");
        var alt_gold = $('span#php-jquery-variable-hack16').attr("class");
        var alt_silber = $('span#php-jquery-variable-hack17').attr("class");
        var alt_bronze = $('span#php-jquery-variable-hack18').attr("class");
        if ($.trim(name) != '') {
            $.post(''+link_persbestzeiten+'', {name: name, piste: piste, lang_norundenzeit: lang_norundenzeit, ohne_items: ohne_items, mit_items: mit_items, th_bestzeit: th_bestzeit, th_von: th_von, th_rang: th_rang, th_rundenzeit: th_rundenzeit, img_gold: img_gold, img_silber: img_silber, img_bronze: img_bronze, title_gold: title_gold, title_silber: title_silber, title_bronze: title_bronze, alt_gold: alt_gold, alt_silber: alt_silber, alt_bronze: alt_bronze}, function(data) {
                $('div#name-data').html(data);
                $('div#name-data').fadeIn(700);
            });
        }
    });

};

var tipsyPlugin = function() {
	$('li.dot img').tipsy({fade: true, gravity: 'n'});
};

var drive = function() {

    $('.auto-oben').css({left: "0px"}).animate({
            left: "37%"
        }, 3700, 'swing').animate({
            left: "120%"
        }, 4300, 'swing').animate({
            left: "120%"
        }, 3000);

    $('.auto-unten').css({left: "0px"}).animate({
            left: "0px"
        }, 2400).animate({
            left: "120%"
        }, 5450, 'swing').animate({
            left: "120%"
        }, 150).animate({
            left: "120%"
        }, 3000, drive);

}

$(document).ready(main);
$(document).ready(tipsyCode);
$(document).ready(tipsyPlugin);
$(document).ready(drive);


-->