app.controller('MyCtrl', ['$http', '$scope', function ($http, $scope) {
	//$scope.file = null;
	$scope.uploadFiles = function(file) {
		//$scope.file = file;
		$http.post("image-upload.php", {data: file})
			.then(function(result) {
				console.log(result.data);
			});
	}
}]);

