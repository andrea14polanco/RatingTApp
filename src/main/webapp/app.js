/**
 * 
 */
var app = angular.module("RatingTApp", ["ngRoute"]);


app.config(function($routeProvider, $locationProvider) {
	 $locationProvider.html5Mode(true);
	  $routeProvider
			  .when("/Profesores", {
			    templateUrl : "/profesores/list.html"
			  })
			  .when("/Profesores/Create", {
			    templateUrl : "/profesores/nuevo-anadir-profesor.html"
			  });
	}

);



