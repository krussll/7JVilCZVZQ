

app.controller('homeController', function($scope, $http) {
    $scope.home = 
    {
    	control: {
    		isLoading: false
    	},
        search: {
            location: ''
        },
    	profiles: null,
    	init: function ()
    	{
    		var home = this;
    		home.control.isLoading = true;
    		$http.get('/api/users/latest')
    			.success(function(data) 
    				{
    					home.profiles = data;
    					home.control.isLoading = false;
    			});
    	},
    	submit: function () {
            var home = this;
            console.log(home.search.location);

            $http.post('api/guides/search', home.search)
                .success(function(response)
                {

                });
        }
	}
});