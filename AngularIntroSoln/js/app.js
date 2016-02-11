var app = angular.module('MyApp', ['ngRoute', 'firebase', 'luegg.directives', 'frapontillo.gage']);

app.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider

			.when('/home', {
				templateUrl : 'templates/home.html'
			})

			.when('/game', {
				templateUrl: 'templates/game.html',
				controller: 'GameCtrl'
			})
			.when('/messenger', {
				templateUrl: 'templates/messenger.html',
				controller: 'MessengerCtrl'
			})

			.otherwise({
				redirectTo: "/home"
			});
	}]);

app.controller('MessengerCtrl',["$scope", "$firebaseArray", function($scope, $firebaseArray){
		$scope.messages = $firebaseArray(new Firebase("https://angularintro.firebaseio.com/messages"));
		$scope.message = "";
		$scope.name = "";
		$scope.sendMessage = function(){
			$scope.messages.$add({
				content:$scope.message,
				sender: $scope.name
			});
			$scope.message = "";
		}
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

