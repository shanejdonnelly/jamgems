/*global angular */
/**
 * Services that persists and retrieves TODOs from localStorage
 */
angular.module('todomvc') 
  .factory("fireStorage", function() {
    var ref = new Firebase("https://angularfire-seed77.firebaseio.com");
      return {
        get: function() {
          var events = [];
          ref.on("child_added", function(snapshot) {
            events.push(snapshot.val());
          });
          return events;
        },
        put: function(event) {
          ref.push(event);
        }
      }
  })
/*
	.factory('todoStorage', function () {
		'use strict';

		var STORAGE_ID = 'todos-angularjs';

		return {
			get: function () {
				return JSON.parse(localStorage.getItem(STORAGE_ID) || '[]');
			},

			put: function (todos) {
				localStorage.setItem(STORAGE_ID, JSON.stringify(todos));
			}
		};
	});
  */
