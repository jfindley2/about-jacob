app.controller('MyCtrl', ['$scope', 'Upload', function ($scope, Upload) {
	//$scope.file = null;
	//$scope.uploadFiles = function(file) {
		//$scope.file = file;
		//$http.post("image-upload.php", {data: file})
		//	.then(function(result) {
		//		console.log(result.data);
		//	});


	$scope.submit = function() {
		if($scope.form.file.$valid && $scope.file) {
			$scope.upload($scope.file);
		}
	};

	$scope.upload = function(file) {
		Upload.upload({
			url: 'image-upload.php',
			method: 'POST',
			data: {file: file}
		}).then(function(result) {
			console.log('Success ' + result.config.data.file.name + ' uploaded. Response: ' + result.data);
			console.log(result.data);
		}, function(result){
			console.log('Error Status: ');
		}, function(evt){
			var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
			console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
		});
	};




		//if ($scope.form.file.$valid && $scope.file) {
		//	Upload.upload({
		//		url: "image-upload.php",
		//		data: {file: file}
		//	})
		//		.then(function(result) {
		//			// image upload complete
		//			console.log(result.data);
		//		})
		//		.then(function(result) {
		//			console.log('Error Status: ');
		//		})
		//		.then(function(result) {
		//			// image upload progress bar
		//			console.log('Progress:');
		//		});
		//}
	//}
}]);

