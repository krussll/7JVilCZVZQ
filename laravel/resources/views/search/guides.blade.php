@extends('shared.master')

@section('content')
        
     <div ng-controller="searchController" ng-init="search.init('[[$location]]')" ng-cloak>
      <!-- page wrap -->
      <section class="section_light">
        <div  class="row">
          <div class="twelve columns">
          <h1>Guides - [[$location]]</h1> 
            <img src='/images/ajax-loader.gif' ng-show="search.control.isLoading" />
            <div id="container" ng-hide="search.control.isLoading" >
                
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