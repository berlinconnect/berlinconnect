require([

    'vendor/jquery',
    'vendor/underscore',
    'vendor/backbone',
    'views/BerlinConnectView',
    'router/Router.js'

], function($, _, Backbone, BerlinConnectView, Router) {

  var berlinConnectView = new BerlinConnectView();
  berlinConnectView.render();

  new Router();

  $(function () {
    Backbone.history.start();
  });

});