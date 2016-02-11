var app = angular.module('MyApp', ['ngRoute', 'firebase', 'luegg.directives', 'frapontillo.gage']);//here is where we include modules that were created by other people

app.config(['$routeProvider', function($routeProvider) {// state service then inject it
	$routeProvider
		.when('/home',{	templateUrl:'templates/home.html'})
		.when('/game',{	templateUrl:'templates/game.html',
			controller:'GameCtrl'

		})
		.when('/messenger',{	templateUrl:'templates/messenger.html',
			controller:'MessengerCtrl'

		})
		.otherwise({redirectTo:'/home'});
		
}]);

app.controller('MessengerCtrl',["$scope", "$firebaseArray", function($scope, $firebaseArray){//two way binding if you change the variable on the controller it will change in the view and vice versa
	$scope.message={
		sender:"john",
		content:"hello"
	}
	//$scope.message=$firebaseArray(new Firebase("htpps://angular"))
	//$scope.message="";
	//$scope.name="";
	//$scope.sendMessage()="";

}]);

app.directive('dlEnterKey', function() {
	return function(scope, element, attrs) {

		element.bind("keydown keypress", function(event) {
			var keyCode = event.which || event.keyCode;

			// If enter key is pressed
			if (keyCode === 13) {
				scope.$apply(function() {
					// Evaluate the expression
					scope.$eval(attrs.dlEnterKey);
				});

				event.preventDefault();
			}
		});
	};
});

