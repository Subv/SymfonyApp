/**
 * Created by Subv on 29/08/13.
 */
var myApp = angular.module('myApp', ["restangular"], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});

myApp.config(function (RestangularProvider) {
    RestangularProvider.setBaseUrl("api");
});

myApp.controller("UsersController", function ($scope, Restangular) {
    $scope.users = Restangular.all("users").getList();
});