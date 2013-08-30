/**
 * Created by Subv on 29/08/13.
 */
var myApp = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});

myApp.controller("UsersController", function UsersController($scope) {
    $scope.users = [
        {username: "A"},
        {username: "B"}
    ];
});