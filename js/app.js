//var myApp = angular.module("myApp", ["ngRoute"]);
var myApp = angular.module("myApp", ["ngRoute", "ngAnimate"]);

myApp.config(function($routeProvider) {
	$routeProvider
		.when("/submit", {
			templateUrl: "partials/PC2.html",
		})
	.otherwise({
		redirectTo: "partials/PC1.html"
	});
});