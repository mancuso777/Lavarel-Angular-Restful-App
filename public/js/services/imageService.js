angular.module('imageService', [])

.factory('Image', function($http) {

    return {
        // get all images
        get : function() {
            return $http.get('/api/images');
        },

        save : function(imageData) {
            return $http({
                method: 'POST',
                url: '/api/images',
                headers: { 'Content-Type' : 'image/png' },
                data: $.param(imageData)
            });
        },

        destroy : function(id) {
            return $http.delete('/api/images/' + id);
        }
    }

});