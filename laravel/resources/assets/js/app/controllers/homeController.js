

app.controller('homeController', function($scope, $http, $location) {
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

             window.location = "s/" + home.search.location;
        }
	}
});