var app = angular.module('myApp', []);


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
app.controller('searchController', function($scope, $http) {
    $scope.search = 
    {
    	control: {
            isLoading: true
        },
        searchData: {
            location: ''
        },
        profiles: null,
        init: function ($location)
        {
            var search = this;
            search.searchData.location = $location;
            search.control.isLoading = true;
            $http.post('/api/guides/location', search.searchData)
                .success(function(data) 
                    {
                        console.log(data);
                        search.profiles = data;
                        search.control.isLoading = false;
                });
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