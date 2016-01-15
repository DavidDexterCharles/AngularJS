<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="customersCtrl">

    <ul>
        <li ng-repeat="x in myData">
            {{ x.Name + ', ' + x.Country }}
        </li>
    </ul>

</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
        $http.get("http://localhost/AngularJS/test/test.json").then(function (response) {
            $scope.myData = response.data.records;
        });
    });
</script>

</body>
</html>