

app.controller('registerController', function($scope, $http) {
    $scope.register = 
    {
        inputs: {
            firstname: '',
            surname: '',
            email: '',
            password: '',
        },
    	control: {
    		isLoading: false
    	},
        submit: function () {
            var register = this;
            $http.post('/api/users/create', register.inputs)
            .success(function(data) 
                    {
                        if (data === true)
                        {
                            console.log('success');
                        }else
                        {
                            console.log('error');
                        }
                });
        }
    	
	}
});