<!doctype html> 
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Laravel and Angular RESTFul Image Gallery</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/image.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//code.angularjs.org/1.3.0/angular.min.js"></script>
    <script src="//code.angularjs.org/1.3.0/angular-route.min.js"></script>
    <script src="//code.angularjs.org/1.3.0/angular-resource.min.js"></script>
    <script src="js/controllers/mainCtrl.js"></script>
    <script src="js/services/imageService.js"></script>
    <script src="js/app.js"></script>
</head> 

<body class="container-fluid" ng-app="imageApp"> 
    <div class="row gallery" ng-controller="mainController">
        <div class="page-header">
            <h2>My Gallery</h2>
            <h4>Laravel and Angular Single Page Application</h4>
        </div>
        <div class="ng-view">
          <div ng-view></div>
        </div> 
        <div class="well stick-b">
            <form ng-submit="uploadImage()">    
                <input class="btn btn-primary btn-sm" type="file" id="imageInput" />
                <button type="submit" class="btn btn-primary btn-sm">Upload Image</button>  
            </form>           
        </div>
    </div> 
        <div class="info stick-a">
        <a class="btn btn-default btn-sm right" href="/deleted">Deleted</a>
        <a class="btn btn-default btn-sm right" href="/">Active</a>
    </div>
</body> 
</html>