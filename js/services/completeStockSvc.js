var app = angular.module("heroesMainApp");
app.service("completeStockSvc", function($http){

	this.getCompleteStock = function(){
		return $http.post('php/getCompleteStock.php')
			.then(function(response){
				return response.data;
			}, function(error){
				alert("Service Failed!");
				console.log(error);
			});
	}
});

