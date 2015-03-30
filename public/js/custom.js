var app = angular.module('Admin', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('RootController', function($scope){
    $scope.goUrl = function(url){
        window.location = Config.baseUrl + '/admin' + url;
    }
}).controller('CategoryIndex', function($scope){

}).controller('PostIndex', function($scope){

});
