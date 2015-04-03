var app = angular.module('Application', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MainController', function($scope, $http){
}).controller('HeaderController', function($scope, $window){
    $scope.keyword = '';
    $scope.search = function(){
        if ($scope.keyword.length > 2) {
            var slug = $scope.keyword
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]/g,'');
            $window.location.href = Config.url + '/search/tag-' + slug ;
        }
    }
}).controller('FaqController', function($scope){
    $scope.contact = {};
    $scope.formReset = function(event){
        event.preventDefault();
        $scope.contact = {};
    }
    $scope.formSubmit = function(event){
        event.preventDefault();
        $('form[name=contactForm]').submit();
    }
});