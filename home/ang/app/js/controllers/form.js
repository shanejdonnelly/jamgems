'use strict';

angular.module('myApp.formController', []) 
 .controller('FormCtrl', ['$scope', 'syncData', function($scope, syncData) {
      $scope.event = null;

console.log($scope.auth)

      $scope.events = syncData('events');

      $scope.addEvent = function(){ 
        if($scope.event){
          $scope.events.$add({
            title: $scope.event.title, 
            description: $scope.event.description, 
            uid: $scope.event.uid,
            private: $scope.event.private

          });
          console.log($scope.event)
          $scope.event = null;

        }
      }

      $scope.isPrivate = function(e){ 
        return e.hasOwnProperty('private') 
      }


  }]);
