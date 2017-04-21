var app = angular.module("RatingTApp", ["ngRoute"]);

app.controller('ProfesorController', function(){
	console.log('controller');
});

app.config(function($routeProvider, $locationProvider) {
	 //
	  $routeProvider
			  .when("/Profesores", {
			    templateUrl : "profesores/list.html",
			    controller: 'ProfesorController'
			  })
			  .when("/Profesores/Create", {
			    templateUrl : "profesores/nuevo-anadir-profesor.html"
			  })
			  .when("/", {
			      templateUrl : "home/home.html",
				  controller: 'ProfesorController'
			  });
	  //$locationProvider.html5Mode(true);
	}

);