var app = angular.module("RatingTApp", ["ngRoute"]);

app.controller('ProfesorList', function($scope, $http){
	$scope.profesores = {};

	$http.get('/RatingTApp/profesores')
		.then(function(request){
			$scope.profesores = request.data;
		});
});

app.controller('ProfesorCreate', function($scope, $http){
	$scope.profesor = {
		nombreProfesor: "",
		rating: ""
	};

	$http.post('/RatingTApp/profesor', $scope.profesor);
});

app.config(function($routeProvider, $locationProvider) {

	  $routeProvider
			  .when("/Profesores", {
			    templateUrl : "profesores/list.html",
			    controller: 'ProfesorList'
			  })
			  .when("/Profesores/Create", {
			    templateUrl : "profesores/create.html"
			  })
				.when("/About", {
			    templateUrl : "home/about.html"
			  })
			  .when("/", {
			      templateUrl : "home/home.html"
			  })
				.otherwise({
						redirectTo: "/"
				});
	  $locationProvider.html5Mode(true);
	}

);
