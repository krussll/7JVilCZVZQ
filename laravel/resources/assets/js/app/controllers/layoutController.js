

app.controller('layoutController', function($scope, $http) {
    $scope.layout = 
    {
        logout: function() {

            var login = this;
            $http.post('/api/login/destroy')
            .success(function(data) 
                {
                    window.location = '/';
                });
        }
    	
	}
});