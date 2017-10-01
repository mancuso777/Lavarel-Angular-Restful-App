<!doctype html> 
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Laravel and Angular Image Gallery</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/image.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="js/controllers/mainCtrl.js"></script>
    <script src="js/services/imageService.js"></script>
    <script src="js/app.js"></script>
</head> 

<body class="container" ng-app="imageApp" ng-controller="mainController"> 
        <div class="info stick-a">
          <div class="col-md-4">
            <a class="btn btn-default btn-sm" href="/">Index</a>
          </div>
          <div class="col-md-4">
           <a class="btn btn-default btn-sm" href="/all">All</a>
          </div>
          <div class="col-md-4">
            <a class="btn btn-default btn-sm" href="/deleted">Deleted</a>
          </div>
        </div>
    <div class="row">
        <div class="page-header">
            <h2>Laravel and Angular Single Page Application</h2>
            <h4>Image Gallery</h4>
        </div>
        <div class="frame" ng-repeat="image in images">
        <div ng-show="!image.deleted">
           <span >Image Name {{ image.image_name }}</span>
           <img class="image" src="{{ image.image_url }}" alt="{{ image.image_alt_text }}">
           <form ng-submit="downloadImage(image.image_id)">    
             <button type="submit" class="btn btn-primary btn-sm">Download</button> 
           </form> 
           <form ng-submit="deleteImage(image.image_id)">    
             <button type="submit" class="btn btn-primary btn-sm">Delete</button>
           </form> 
           </div>
        </div>
        <div class="well stick-b">
          <div class="col-md-12">
            <h1> Upload Images</h1>
            <form ng-submit="uploadImage()">    
                <input class="btn btn-primary btn-lg" type="file" id="imageInput" /><br/><br/>
                <button type="submit" class="btn btn-primary btn-lg">Upload</button>  
            </form>           
          </div>
        </div>
    </div> 
</body> 
</html>