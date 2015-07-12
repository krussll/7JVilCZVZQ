

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
        validation: {
            email: {
                show: false,
                message: ''
            }
        },
        submit: function() {

            var login = this;
            $http.post('/api/login/auth', login.inputs)
            .success(function(data) 
                {
                    if (data === true)
                    {
                        window.location = 'dashboard' ;
                    }else
                    {
                        login.validation.show = true;
                        login.validation.message = 'details provided are incorrect';
                    }
                });
        }
    	
	}
});