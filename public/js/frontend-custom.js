var app = angular.module('Application', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MainController', function($scope, $http){
    $scope.increaseLikes = function(postId) {
        $http.post(Config.url + '/increaseLikes', { post_id : postId }).then(function(){});
    }
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
}).controller('NewsController', function ($scope, $window){
    $scope.latestPost = Config.latestPost;
    $scope.topPost = $scope.latestPost[0];
    $scope.goPost = function(post) {
       return Config.url + '/' + post.slug + '.html';
    }
    $scope.goPostImage =  function(post, prefix) {
        return Config.url + '/files/images/' + prefix  + post.image;
    }
    $scope.changeLatest = function(post, event) {
        event.preventDefault();
        $scope.topPost = post;
    }
}).controller('HomeController', function($scope){
    $scope.rootCategoryLatest = Config.rootCategoryLatest;
    $scope.rootCategoryTop = $scope.rootCategoryLatest[0];
    $scope.goPost = function(post) {
        return Config.url + '/' + post.slug + '.html';
    }
    $scope.goPostImage =  function(post, prefix) {
        return Config.url + '/files/images/' + prefix  + post.image;
    }
    $scope.changeLatest = function(post, event) {
        event.preventDefault();
        $scope.rootCategoryTop = post;
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