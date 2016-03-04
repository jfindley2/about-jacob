<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.js"></script>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload-shim.js"></script>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload.js"></script>

		<script src="app.js"></script>
		<script src="script.js"></script>


	</head>

	<body ng-app="FileUpload">
<!--		<form ng-controller="MyCtrl" name="form" ng-submit="uploadFiles($file);">-->
		<form ng-controller="MyCtrl" name="form">
			Remember to click Select
			<button ng-model="file" ngf-select="uploadFiles($file)" name="file" type="submit">Select</button>
<!--			<div class="button" ngf-select ng-model="file" name="file" ngf-pattern="'image/*'"-->
<!--				  ngf-accept="'image/*'" >Select</div>-->
			<button type="submit">submit</button>
			<pre>{{ file.name | json }}</pre>
		</form>


	</body>
</html>