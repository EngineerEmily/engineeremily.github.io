var opencaApp = angular.module('opencaApp', []);

opencaApp.controller('DeptDataCtrl', ['$scope', '$http', function($scope, $http) {
  $http.get('https://raw.githubusercontent.com/opencalifornia/opencalifornia.github.io/master/state-agencies/js/data.json').success(function(data) {
    $scope.departments = data;
  });
}]);
