

app.controller('loginController', function($scope, $http) {
    $scope.login = 
    {
        inputs: {
            email: '',
            password: '',
        },
    	control: {
    		isLoading: false
    	},
    	init: function ()
    	{
    	}
    	
	}
});