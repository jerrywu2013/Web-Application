angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        {name:'Jani',country:'Norway'},
        {name:'Hege',country:'Sweden'},
        {name:'Jerry',country:'Taiwan'},
        {name:'Wu',country:'America'},
        {name:'Kai',country:'Denmark'}
    ];
});
