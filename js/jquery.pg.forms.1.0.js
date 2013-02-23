/*
 * Persistent Grid Forms - jQuery plugin for prettier forms
 *
 * Copyright (c) Babs Gösgens
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Version:  1.0
 */
(function($) {

    $.fn.extend({
        prettySelect: function(config) {
			return this.each(function() {
                new $.prettySelect(this, config);
            });
        },
        comboSelect: function(config) {
			return this.each(function() {
                new $.comboSelect(this, config);
            });
        }
    });

    $.prettySelect = function(el, config)
	{
		var defaults = {
			wrap: 'input'
		};

	    config = $.extend( {}, defaults, config );

		var el 		= $(el),
			options = el.children('option'),
			active  = el.val(),
			list    = $('<ul class="select close"></ul>');

		if( el.next('ul') ) {
			el.next('ul').remove();
		}

		options.each(function() {
			o = $(this);
			e = $('<li></li>')
				.attr( 'data-value', o.val() )
				.html( o.html() );

			if( active === o.val() ) {
				e.addClass('selected');
			}

			e.click(function(){
				list.toggleClass('open close');
				el.val( $(this).attr('data-value') ).trigger('change');
				// $(this).addClass('selected').siblings().toggle().removeClass('selected');
				// list.toggleClass('open close');
				$(this).addClass('selected').siblings().toggle().removeClass('selected');
			});

			list.append(e);
		});


		list.mouseleave(function(){
			if(list.hasClass('open')) {
				list.toggleClass('open close').children().not('.selected').toggle();
			}
		});

		el.after(function(){
			el.after(list);
			if(config.wrap) {
				list.wrap('<div class="'+config.wrap+'" />')
			}
		}).hide();

	}

	$.comboSelect = function(el, config)
	{
		var defaults = {};

	    config = $.extend( {}, defaults, config );

	    $('input[data-rel="other"]').hide();

	    $(el).change(function(){

			var s = $(this),
				o = s.siblings('input[data-rel="other"]');

			if( s.val()==='Other' ) {

				if(s.attr('required')) {
					o.attr('required', 'required');
				}

				o.attr('name', s.attr('name') ).show();

				s.hide().next().hide();
			}
			else { o.val('').removeAttr('name required').hide(); }
	    });
	}

})(jQuery);


// Trigger the behavior
$('select.combo').comboSelect();
$('select.pretty').prettySelect();