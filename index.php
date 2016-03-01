<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.js"></script>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload-shim.js"></script>
		<script type="text/javascript" src="https://angular-file-upload.appspot.com/js/ng-file-upload.js"></script>

		<script src="app.js"></script>
		<script src="script.js"></script>


	</head>

	<body ng-controller="MyCtrl" class="ng-scope ng-binding">
		<form ng-app="fileUpload" ng-controller="MyCtrl" name="form">
			Remember to click Select
			<div class="button" ngf-select ng-model="file" name="file" ngf-pattern="'image/*'"
				  ngf-accept="'image/*'" ngf-max-size="20MB" ngf-min-height="100"
				  ngf-resize="{width: 100, height: 100}">Select</div>
			<button type="submit" ng-click="submit()">submit</button>
		</form>


		</body></html>