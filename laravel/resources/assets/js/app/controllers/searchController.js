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
                        search.profiles = data;
                        search.control.isLoading = false;
                });
        }
	}
});