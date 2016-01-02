
var MyApp = angular.module('MyApp', ['ngRoute', 'chieffancypants.loadingBar', 'ngAnimate']);

// Defining URLs
MyApp.config(['$routeProvider', function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'pages/grid.html',
      controller: 'MainCtrl'
    })
    .when('/colors', {
      templateUrl: 'pages/colors.html',
      controller: 'ColorsCtrl'
    })
    .when('/ux', {
      templateUrl: 'pages/ux.html',
      controller: 'UX'
    })
    .otherwise({
      redirectTo: '/'
    });
}]);

// Main Controller
MyApp.controller('MainCtrl', function ($scope, $http, $timeout, cfpLoadingBar) {
  $scope.start = function() {
    cfpLoadingBar.start();
  };
  $scope.complete = function() {
    cfpLoadingBar.complete();
  };
  $scope.start();
  $scope.fakeIntro = true;
  $timeout(function() {
    $scope.complete();
    $scope.fakeIntro = false;
  }, 750);
});

// Color Controller
MyApp.controller('ColorsCtrl', function ($scope, $http, $timeout, cfpLoadingBar) {
  $scope.start = function() {
    cfpLoadingBar.start();
  };
  $scope.complete = function() {
    cfpLoadingBar.complete();
  };
  $scope.start();
  $scope.fakeIntro = true;
  $timeout(function() {
    $scope.complete();
    $scope.fakeIntro = false;
  }, 750);
});

// UX Controller
MyApp.controller('UX', function ($scope, $http, $timeout, cfpLoadingBar) {
  $scope.start = function() {
    cfpLoadingBar.start();
  };
  $scope.complete = function() {
    cfpLoadingBar.complete();
  };
  $scope.start();
  $scope.fakeIntro = true;
  $timeout(function() {
    $scope.complete();
    $scope.fakeIntro = false;
  }, 750);
});
