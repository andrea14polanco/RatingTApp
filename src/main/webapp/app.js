var app = angular.module("RatingTApp", ["ngRoute"]);

app.controller('ProfesorList', function($scope, $http){
	$scope.profesores = {};
	
	$http.get('/RatingTApp/profesores')
		.then(function(request){
			$scope.profesores = request.data;
		});
});

app.config(function($routeProvider, $locationProvider) {
	 
	  $routeProvider
			  .when("/Profesores", {
			    templateUrl : "profesores/list.html",
			    controller: 'ProfesorList'
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