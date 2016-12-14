var app = angular.module("heroesMainApp");
app.service("dailyStockSvc", function($http){

	this.getDailyStock = function(bloodGroup, component){
		return $http.post('php/dailyStock.php', {bloodGroup: bloodGroup, component: component})
			.then(function(response){
				return response.data;
			}, function(error){
				alert("Service Failed!");
				console.log(error);
			});
	}
});

