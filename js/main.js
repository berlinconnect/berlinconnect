require([

    'vendor/jquery',
    'vendor/underscore',
    'vendor/backbone',
    'views/BerlinConnectView'

], function($, _, Backbone, BerlinConnectView) {

  var berlinConnectView = new BerlinConnectView();
  berlinConnectView.render();
});