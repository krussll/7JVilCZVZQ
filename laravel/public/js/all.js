var app = angular.module('myApp', []);


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
    	},
        geoId: null,
    	submit: function () {
            var home = this;
            window.location = "s/" + home.search.location;
        },
        geoid: null,
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
                        window.location = "dashboard" ;
                    }else
                    {
                        console.log('error');
                        login.validation.show = true;
                        login.validation.message = 'details provided are incorrect';
                    }
                });
        }
    	
	}
});
app.controller('searchController', function($scope, $http) {
    $scope.search = 
    {
    	control: {
            isLoading: true
        },
        inputs: {
            location: ''
        },
        geocode: null,
        profiles: null,
        locationTitle:  '',
        init: function (location)
        {
            var search = this;
            search.inputs.location = location;
            search.control.isLoading = true;

            

                search.searchGuides();
            
        },
        searchGuides: function()
        {
            var search = this;
            search.control.isLoading = true;

            search.locationTitle = search.inputs.location;
            var service = new google.maps.places.AutocompleteService();
            var myDataPromise = service.getQueryPredictions({ input: search.inputs.location }, function(predictions, status) 
            {
                if (predictions !== null) 
                {
                  var foundItem = predictions[0];
                
                  if(foundItem.types[0] === 'locality'){
                      search.geocode = foundItem.id;
                    }else
                    {
                        search.geocode = null;
                    }
                }else
                {
                   search.geocode = null; 
                }
            

                console.log(search.geocode);

                if (search.geocode !== null)
                {
                    $http.get('/api/guides/location?location=' + search.geocode)
                    .success(function(data){
                        search.profiles = data;
                        search.control.isLoading = false;
                    })
                    .error(function (data)
                    {
                       search.profiles = null; 
                        search.control.isLoading = false;
                    });
                }else
                {
                    search.profiles = null;
                    search.control.isLoading = false;
                    console.log(search.control.isLoading);
                    $scope.$apply();
                }
            });
        }        
	}
});


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

app.directive('googleplace', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, model) {
            var options = {componentRestrictions: {country: 'gb'}, types: ['(cities)']};
           
            scope.gPlace = new google.maps.places.Autocomplete(element[0], options);
            
            google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
                scope.$apply(function() {
                   scope.geoId = scope.gPlace.getPlace().id;
                   
                    model.$setViewValue(element.val());                
                });
            });

        },
    };
});
//# sourceMappingURL=all.js.map