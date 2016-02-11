var app = angular.module('MyApp', ['ngRoute', 'firebase', 'luegg.directives', 'frapontillo.gage']);

app.config(['$routeProvider', function($routeProvider) {
		
}]);

app.controller('MessengerCtrl',["$scope", "$firebaseArray", function($scope, $firebaseArray){
	
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

