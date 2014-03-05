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
      'click .slate, .sidebar-container li.internal, .nav-links ul li.internal': 'onLickLightboxLink',
      'click .lightbox .close, .lightbox-container .close-lightbox, .lightbox .lightbox-overlay, .dark-overlay': 'closeLightbox',
      'click .sidebar-control': 'toggleSidebar',
      'click .sidebar .close': 'closeSidebar',
      'mousedown button[data-track]': 'onClickAnylyticsLink',
    },

    'render': function() {

      var self = this;

      // Set high res images if user is on retina
      self.setRetinaInlineImages();

      // Check Scroll Position
      self.checkScrollPosition();

      // Check Scroll Position
      self.outsideLinks();

      // Check if mobile
      self.isMoblie();

      // Creates a sticky menu
      self.stickyMenu();

      //
      self.videoHider();

      // self.checkHash();
    },

    // checkHash:function() {

    //   var self = this;
    //   var hash = window.location.hash.replace('#','');

    //   if(hash.length === 0) return;

    //   self.openLightbox(hash);
    // },

    'videoHider': function() {

      var self = this;

      // setTimeout(function() {
      //   $('.video-hero .logo').addClass('fadeIn');
      // }, 12000);

      setTimeout(function() {
        $('.video-hero').addClass('fadeOut');
      }, 1000);

      $(".video-hero video").bind("ended", function() {
        $('.video-hero').addClass('backgroundAdded');
      });

    },

    'isMoblie':function() {

      var self = this;

      var ismobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent.toLowerCase());

      if (ismobileDevice)
      {
        $('*').css("background-attachment", "scroll")
        $('.mobile').removeClass("hidden")
        $('.desktop').addClass("hidden")
      }
    },

    'outsideLinks':function() {

      var self = this;

      $(document.links).filter(function() {
          return this.hostname != window.location.hostname;
      }).attr('target', '_blank');
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

      // document.location.hash = '!';

    },

    'closeSidebar': function () {

      var self = this;
      var $body = $('body');

      $body.removeClass('active');

      // document.location.hash = '!';

    },

    'stickyMenu': function () {

      var self = this;
      var $header = $(".menu"),
      $clone = $header.before($header.clone().addClass("clone"));
      
      $(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        var height = $('.hero, .sub-hero, .video-hero').height();
        $(".menu.clone").toggleClass("down", (fromTop > height));
      });
    },

    'onLickLightboxLink': function (ev) {

      var self = this;
      var $target = $(ev.target);

      if (!$target.hasClass('slate, sidebar-container li.internal, nav-links ul li ')) {
        $target = $target.closest('.slate, .sidebar-container li.internal , .nav-links ul li');
      }

      var elementId = $target.attr('id');

      self.openLightbox(elementId);
    },

    openLightbox: function(id) {

      // document.location.hash = '!';

      $('.lightbox.' + id).removeClass('hidden');
      $('.dark-overlay').removeClass('hideme');
      $('.lightbox .lightbox-overlay').removeClass('hidden');
      $('body').css("overflow", "hidden");

      // window.location.hash = id;
    },

    'closeLightbox': function () {

      var self = this;
      var $lightbox = $('.lightbox');

      $lightbox.addClass('hide');
      $('.dark-overlay').addClass('hide');
      $('body').css("overflow", "auto"); 

      setTimeout(function() {
        $lightbox.addClass('hidden');
        $('.dark-overlay').addClass('hideme');
        $lightbox.removeClass('hide');
        $('.dark-overlay').removeClass('hide');
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

        var windowHeight = $(window).height();

        var documentHeight = $(document).height();

        var height = $('.hero').height();

        var footerHeight = $('footer').height();

        Backbone.Events.trigger('scroll', position);

        if (position + windowHeight == documentHeight) {
          $(".menu.clone").toggleClass("down");
          $("body").removeClass('active');
        }

      }  

      throttledPositionCheck = _.throttle(checkPosition, 250);

      $(window).on('scroll', throttledPositionCheck);
    }
  });
});