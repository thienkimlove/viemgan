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
    $scope.postTitle = Config.searchPost;
    $scope.searchPost = function(event){
        event.preventDefault();
        if ($scope.postTitle.length > 2) {
            window.location = Config.baseUrl + '/admin/posts?q=' + encodeURI($scope.postTitle);
        }
    }
}).controller('QuestionIndex', function($scope){

}).controller('ContactIndex', function($scope){

});
