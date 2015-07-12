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