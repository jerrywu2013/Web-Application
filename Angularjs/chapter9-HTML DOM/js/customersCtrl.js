var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
 $http.get("http://www.w3schools.com/angular/customers.php")
 // $http.get("http://127.0.0.1/json.php")
  .success(function (response) {$scope.names = response.records;});
});
