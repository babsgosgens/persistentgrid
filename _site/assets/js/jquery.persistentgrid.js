/* http://persistent-grid.com
   v1.0 | 20130701
   Copyright: Copyright (C) 2013 Crossing Hippos - Babs Gösgens. All rights reserved.
   License: GNU General Public License version 2 or later; see LICENSE.txt
*/
(function($) {
  
  $.fn.extend({
    tabAnchors: function(config) {
      return this.each(function() {
        new $.tabAnchors(this, config );
      });
    },
    tabs: function(config) {
      return this.each(function() {
        new $.tabs(this, config);
      });
    }
  });

  /**
   * tabAnchors pulls the headings from the tab panes
   * and builds an unordered list 
   * with the navigation to open and close tabs
   *
   * Configuration options:
   *    wrap - an optional element to wrap the list
   *    attach - before | after, will append the list either before the first pane, or after the last
   *    clone - true | false, if false the original tab-triggers will be removed  
   */
  $.tabAnchors = function(el, config)
  {
    var defaults = {
            classTabs: "tabs",
            classPane: ".tabs-pane",
            classTrigger: ".tabs-trigger",
            wrap: "",
            attach: "before",
            clone: true
        },
        config = $.extend({}, defaults, config)
        ;

    var el = $(el),
        list = $('<ul />'),
        panes = $(config.classPane);

    if(config.attach=="before") {
      panes.first().before(list);
    }
    else {
      panes.first().after(list);
    }

    panes.each(function(){

      var trigger = $(this).find(config.classTrigger);

      if(config.clone) {
        trigger = trigger.clone(true);
      }

      list.append( $('<li />').append( trigger ) )
    });


    list
      .find(config.classTrigger)
      .replaceWith(function(e, el){

        var obj = $(this),
            objTag = obj.prop("tagName"),
            objRel = obj.data("rel"),
            objHtml = obj.html()
            objClss = "tabs-trigger",
            a = '';

        if(objTag=="A") {
          a = obj;
        }
        else if(obj.find("a").length > 0) {
          a = obj.find("a");
        }
        else {
          a = $("<a />");
        }

        a.attr("href", objRel).attr("data-rel", objRel).attr("class", objClss).html(objHtml);

        $(this).replaceWith(a);
      })
      ;
    list.wrap( config.wrap );
  }

  /**
   * tabs add tab-like behavior to any markup
   *
   */
  $.tabs = function(el, config)
  {
    // Configuration
    var defaults = {
          classTabs: "tabs",
          classPane: ".tabs-pane",
          classTrigger: ".tabs-trigger",
          classContent: ".tabs-content",
          classActiveTrigger:  "is-tab-active",
          classActivePane: "is-pane-open"
        },
        config = $.extend({}, defaults, config);

    var el = $(el),
        panes = $(config.classPane);

    el.tabAnchors(config);
    
    var triggers = $(config.classTrigger);

    // find all triggers
    triggers
      .on('click', function(e){

        e.preventDefault();

        // The pane is open, abort
        if( $(this).hasClass('is-nav-active') ) {
          return false;
        }

        var trigger = $(this),
            target = trigger.data('rel'),
            pane = $( target )
            ;

        triggers.removeClass( config.classActiveTrigger );
        panes.removeClass( config.classActivePane );

        trigger.addClass( config.classActiveTrigger );
        pane.addClass( config.classActivePane );

      }).first().trigger('click');
  }

})(jQuery);