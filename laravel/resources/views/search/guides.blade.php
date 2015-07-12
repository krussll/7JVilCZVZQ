@extends('shared.master')

@section('content')
        
     <div ng-controller="searchController" ng-init="search.init('[[$location]]')" ng-cloak>
      <!-- page wrap -->
      <section class="section_light">
        <div  class="row">
          <div class="twelve columns">
          <h1>Guides - {{search.locationTitle}}</h1> 

           <form  id ="guideSearch" ng-submit="search.searchGuides()">
              <div class="row ">
                  <div class="twelve columns">
                      <label>Where do you want to go?</label>
                  </div>
               </div>
               <div class="row">
                  <div class="eleven columns">
                    <input ng-model="search.inputs.location" type="text"  placeholder="e.g. London" googleplace  />
                  </div>  
                  <div class="one columns">
                    <input type="submit" text="Go" class="button success" />
                  </div>
               </div>
             </form>
            <img src='/images/ajax-loader.gif' ng-show="search.control.isLoading" />
            <div id="container" ng-hide="search.control.isLoading" >
              <div class="row">
                  <div ng-show="search.profiles == null" class="twelve columns">
                    <h3>Sorry, we can't find that place! Please try again.
                  </div> 
                  <div ng-show="search.profiles.length == 0" class="twelve columns">
                    <h3>Sorry, we don't currently have any guides in that location.
                  </div> 
               </div>
              <!-- guide -->
              <div class='box_fluid col_fluid' ng-repeat="guide in search.profiles">
                  <a href="#"><img src='/images/bath.jpeg' alt="desc" /></a>
                        <div class='box_fluid_inner'>
                            <a href="#" class="media-photo-badge">
                              <div class="media-photo media-round">
                                  <img src="/images/profile.jpg" />
                              </div>
                            </a>
                            <h4><strong>{{guide.firstname}} {{guide.surname}}</strong></h4>
                            <div class="descrp">
                              <div>One chilled out Mother</div>
                              <div>4.5 stars · 7 reviews</div>
                            <div>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@stop