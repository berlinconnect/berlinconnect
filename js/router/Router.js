define([

  'vendor/jquery',
  'vendor/underscore',
  'vendor/backbone'

], function($, _, Backbone) {

  return Backbone.Router.extend({

    'routes': {

      '': 'default'
    },

    'initialize': function () {

      var self = this;

      Backbone.Events.on('route:to', self._goToRoute, self);
    },

    'default': function (route) {

      console.log(route);
    },

    'goToRoute': function (route) {

      var self = this;

      self.navigate(route, true);
    }
  });
});