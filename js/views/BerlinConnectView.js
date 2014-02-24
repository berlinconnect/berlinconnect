define([

  'vendor/jquery',
  'vendor/underscore',
  'vendor/backbone',

  'helpers/helpers'

], function($, _, Backbone, helpers) {

  return Backbone.View.extend({

    'el': 'body',

    'events': {

      'click .jobs a[href*=#]': 'scrollToAnchor',
      'click .slate, .sidebar-container li, .nav-links ul li': 'openLightbox',
      'click .lightbox .close, .lightbox .lightbox-overlay': 'closeLightbox',
      'click .sidebar-control, .sidebar .close': 'toggleSidebar',
      'mousedown a[data-track]': 'onClickAnylyticsLink',
    },

    'render': function() {

      var self = this;

      // Set high res images if user is on retina
      self.setRetinaInlineImages();

      // Check Scroll Position
      self.checkScrollPosition();
    },

    'trackEvent': function (section, area, action) {

      return _gaq.push(['_trackEvent', section, area, action]);
    },


    'onClickAnylyticsLink':function (ev) {

      var self = this;
      var $target = $(ev.target);

      if (ev.target.tagName !== 'A') {
        $target = $target.closest('a');
      }

      var href = $target.attr('href');
      var parts = $target.attr('data-track').split(':');

      self.trackEvent(parts[0], parts[1], parts[2]);
    },

    'toggleSidebar': function () {

      var self = this;
      var $body = $('body');

      $body.toggleClass('active');

    },

    'openLightbox': function (ev) {

      var self = this;
      var $target = $(ev.target);

      if (!$target.hasClass('slate, sidebar-container li, nav-links ul li ')) {
        $target = $target.closest('.slate, .sidebar-container li, .nav-links ul li');
      }

      var elementId = $target.attr('id');
      //find the divs with this class name and show them
      $('.lightbox.' + elementId).removeClass('hidden');
      $('.lightbox .lightbox-overlay').removeClass('hidden');
    },

    'closeLightbox': function (ev) {

      var self = this;
      var $lightbox = $('.lightbox');

      $lightbox.addClass('hide');

      setTimeout(function() {
        $lightbox.addClass('hidden');
        $lightbox.removeClass('hide');
      }, 500);

    },

    'setRetinaInlineImages': function () {

      var self = this;
      var $retinaImages = self.$('img.retina-image, img.col-image');

      if (window.devicePixelRatio > 1) {
        $retinaImages.each(function() {
          var src = $(this).attr('src');
          if (src) {
            src = src.replace(/(\.)(jpg|png)($|\?)/, '@2x.$2');
            $(this).attr('src', src);
          }
        });
      }
    },

    'scrollToAnchor': function(ev) {

      var self = this;
      var link = $(ev.target).attr('href');

      if (!link || link && (link.indexOf('http://') >= 0 || link.indexOf('https://') >= 0)) {
        return;
      } else {
        ev.preventDefault();
      }

      var $anchor = self.$(link);

      self.$el.animate({scrollTop:$anchor.offset().top - 80}, 500);
    },

    'checkScrollPosition': function() {

      var self = this;

      function checkPosition () {

        var position = $(window).scrollTop();

        Backbone.Events.trigger('scroll', position);
      }

      throttledPositionCheck = _.throttle(checkPosition, 250);

      $(window).on('scroll', throttledPositionCheck);
    }
  });
});