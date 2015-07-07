var app = angular.module('myApp', []);


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

app.directive('googleplace', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, model) {
            var options = {componentRestrictions: {country: 'gb'}, types: ['(cities)']};
            
            scope.gPlace = new google.maps.places.Autocomplete(element[0], options);
 
            google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
                scope.$apply(function() {
                    model.$setViewValue(element.val());                
                });
            });
        }
    };
});
//# sourceMappingURL=all.js.map