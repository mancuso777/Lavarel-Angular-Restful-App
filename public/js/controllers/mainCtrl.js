angular.module('mainCtrl', [])

.controller('mainController', function($scope, $http, Image) {

    $scope.imageData = {};

    Image.get()
        .success(function(data) {
            $scope.images = data;
        });

    $scope.uploadImage = function() {
        /*
        Image.save($scope.imageData)
            .success(function(data) {

                Image.get()
                    .success(function(getData) {
                        $scope.images = getData;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
        */
    };

    $scope.downloadImage = function(id) {
        //TODO
        /*
        function downloadBlob (url)
        {
            //$q.defer() is a angular implementation of promises
            //Is you are not using angular feel free to change it.
            var defer = $q.defer();

            var xhr = new window.XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.responseType = 'blob';

            xhr.onload = function(e)
            {
                if (this.status == 200) {
                    defer.resolve(this.response);
                }
                else {
                    defer.reject(this.response);
                }
            }

            xhr.send();

            return defer.promise;
        };
        */

    };

    $scope.deleteImage = function(id) {

        Images.destroy(id)
            .success(function(data) {

                Images.get()
                    .success(function(getData) {
                        $scope.images = getData;
                    });

            });
    };

});
