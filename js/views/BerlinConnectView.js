define([

  'vendor/jquery',
  'vendor/underscore',
  'vendor/backbone',

  'helpers/helpers'

], function($, _, Backbone, helpers) {

  return Backbone.View.extend({

    'el': 'body',

    'events': {

      'click .scroll a[href*=#]': 'scrollToAnchor',
      'click .slate, .sidebar-container li, .nav-links ul li': 'onLickLightboxLink',
      'click .lightbox .close, .lightbox .lightbox-overlay': 'closeLightbox',
      'click .sidebar-control': 'toggleSidebar',
      'click .sidebar .close': 'closeSidebar',
      'mousedown a[data-track]': 'onClickAnylyticsLink',
    },

    'render': function() {

      var self = this;

      // Set high res images if user is on retina
      self.setRetinaInlineImages();

      // Check Scroll Position
      self.checkScrollPosition();

      // self.checkHash();
    },

    // checkHash:function() {

    //   var self = this;
    //   var hash = window.location.hash.replace('#','');

    //   if(hash.length === 0) return;

    //   self.openLightbox(hash);
    // },

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

      // document.location.hash = '!';

    },

    'closeSidebar': function () {

      var self = this;
      var $body = $('body');

      $body.removeClass('active');

      // document.location.hash = '!';

    },

    'onLickLightboxLink': function (ev) {

      var self = this;
      var $target = $(ev.target);

      if (!$target.hasClass('slate, sidebar-container li, nav-links ul li ')) {
        $target = $target.closest('.slate, .sidebar-container li, .nav-links ul li');
      }

      var elementId = $target.attr('id');

      self.openLightbox(elementId);
    },

    openLightbox: function(id) {

      // document.location.hash = '!';

      $('.lightbox.' + id).removeClass('hidden');
      $('.lightbox .lightbox-overlay').removeClass('hidden'); 

      // window.location.hash = id;
    },

    'closeLightbox': function (ev) {

      var self = this;
      var $lightbox = $('.lightbox');

      $lightbox.addClass('hide');

      setTimeout(function() {
        $lightbox.addClass('hidden');
        $lightbox.removeClass('hide');
      }, 500);

      // document.location.hash = '!';
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
      var hash = $(ev.target).closest('a').attr('href');
      
      var $anchor = $(hash);

      if($anchor.length) {

        ev.preventDefault();
        self.$el.animate({scrollTop:$anchor.offset().top}, 500, function () {

          window.location.hash = hash;
        });
      }
    },

    'checkScrollPosition': function() {

      var self = this;

      function checkPosition () {

        var position = $(window).scrollTop();

        Backbone.Events.trigger('scroll', position);

        if(position > 600) {

          $("body").removeClass("active", 1000);
        }
      }  

      throttledPositionCheck = _.throttle(checkPosition, 250);

      $(window).on('scroll', throttledPositionCheck);
    }
  });
});