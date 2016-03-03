app.controller('MyCtrl', ['$http', '$scope', function ($http, $scope) {
	//$scope.file = null;
	$scope.uploadFiles = function(file) {
		$scope.file = file;
		//$scope.f = file;
		//$scope.errFile = errFiles && errFiles[0];
		$http.post("image-upload.php", $scope.file)
			.then(function(result) {
				console.log(result.data);
			});
	}
}]);

